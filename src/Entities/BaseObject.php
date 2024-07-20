<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\Guid\Guid;
use Ramsey\Uuid\UuidInterface;

abstract class BaseObject
{
    /**
     * @var array<string, mixed>
     */
    protected array $attributes = [];
    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [];

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [];
    }

    protected function castAttribute(string $key, mixed $value): mixed
    {
        $casts = $this->casts();

        if (array_key_exists($key, $casts)) {
            if ($casts['key'] instanceof \Closure) {
                return $casts['key']($value);
            }

            $castType = $casts[$key];
        } else {
            $castType = 'string';
        }

        switch ($castType) {
            case 'int':
            case 'integer':
                return (int) $value;
            case 'real':
            case 'float':
            case 'double':
                return $this->fromFloat($value);
            case 'string':
                return (string) $value;
            case 'bool':
            case 'boolean':
                return (bool) $value;
            case 'datetime':
                return $this->asDateTime($value);
            case 'guid':
                return $this->fromGuidString((string) $value);
        }

        try {
            $reflected = new \ReflectionClass($castType);
            if ($reflected->isEnum()) {
                /* @var class-string<\BackedEnum> $castType */
                return $castType::from($value);
            }
            if ($reflected->isSubclassOf(self::class)) {
                /** @var BaseObject $class */
                $class = new ($reflected->getName())();

                return $class->fill($value);
            }
        } catch (\ReflectionException) {
        }

        return $value;
    }

    public function getAttribute(string $name, mixed $default = null): mixed
    {
        return $this->attributes[$name] ?? $default;
    }

    /**
     * @param \stdClass|array<string, mixed> $values
     *
     * @return $this
     *
     * @throws \Exception
     */
    public function fill(\stdClass|array $values): static
    {
        if ($values instanceof \stdClass) {
            $values = get_object_vars($values);
        }

        foreach ($values as $key => $value) {
            $k = $this->attributeMapping[$key] ?? $key;

            if (property_exists($this, $k)) {
                $this->{$k} = $this->castAttribute($k, $value);
            } else {
                $this->attributes[$k] = $this->castAttribute($k, $value);
            }
        }

        return $this;
    }

    public function makeStringSoapVar(string $value): \SoapVar
    {
        return new \SoapVar($value, XSD_STRING, 'string', XSD_NAMESPACE);
    }

    public function fromGuidString(string $guid): UuidInterface
    {
        return Guid::fromString($guid);
    }

    public function fromFloat(mixed $value): float
    {
        return match ((string) $value) {
            'Infinity' => INF,
            '-Infinity' => -INF,
            'NaN' => NAN,
            default => (float) $value,
        };
    }

    public function asDateTime(mixed $value): \DateTimeInterface
    {
        return \DateTime::createFromFormat(\DateTimeInterface::ATOM, (string) $value, new \DateTimeZone('UTC'));
    }
}
