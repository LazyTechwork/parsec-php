<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\ReflectionHelper;
use LazyTechwork\Parsec\XmlSerializable;
use Ramsey\Uuid\Guid\Guid;
use Ramsey\Uuid\UuidInterface;

abstract class BaseObject implements XmlSerializable
{
    public static function fromStdClass(\stdClass $obj): static
    {
        $constructor = (new \ReflectionClass(static::class))->getConstructor();
        if ($constructor === null) {
            throw new \RuntimeException('Cannot instantiate class '.static::class);
        }
        $params = $constructor->getParameters();
        $resultParams = [];
        foreach ($params as $param) {
            if (isset($obj->{$param->getName()})) {
                $types = ReflectionHelper::getAllTypes($param);
                if (($parsedParam = static::parseParam($param->getName(), $obj->{$param->getName()})) !== false) {
                    $resultParams[$param->getName()] = $parsedParam;
                } elseif (ReflectionHelper::hasType($types, UuidInterface::class)) {
                    $resultParams[$param->getName()] = static::createFromGuidString($obj->{$param->getName()});
                } elseif (ReflectionHelper::hasType($types, \DateTimeInterface::class)) {
                    $resultParams[$param->getName()] = \DateTimeImmutable::createFromFormat(\DateTimeInterface::ATOM, $obj->{$param->getName()});
                } else {
                    $resultParams[$param->getName()] = $obj->{$param->getName()};
                }
                continue;
            }

            if ($param->isOptional()) {
                continue;
            }

            if ($param->isDefaultValueAvailable()) {
                $resultParams[$param->getName()] = $param->getDefaultValue();
                continue;
            }

            if ($param->allowsNull()) {
                $resultParams[$param->getName()] = null;
            }
        }

        return new static(...$resultParams);
    }

    protected static function parseParam(string $paramName, mixed $value): mixed
    {
        return false;
    }

    protected static function makeStringSoapVar(string $value): \SoapVar
    {
        return new \SoapVar($value, XSD_STRING, 'string', XSD_NAMESPACE);
    }

    protected static function createFromGuidString(string $guid): UuidInterface
    {
        return Guid::fromString($guid);
    }
}
