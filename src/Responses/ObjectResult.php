<?php

namespace LazyTechwork\Parsec\Responses;

/**
 * @template T
 */
final class ObjectResult extends BaseResult
{
    /**
     * @var T|array<T>|mixed
     */
    private mixed $value;

    /**
     * @return T|array<T>|mixed
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    public static function fromStdClass(\stdClass $obj): static
    {
        $instance = parent::fromStdClass($obj);
        $instance->value = $obj->Value;

        return $instance;
    }

    /**
     * @param T|array<T>|mixed $value
     *
     * @return self<T>
     */
    public static function fromObject(mixed $value): self
    {
        /**
         * @var ObjectResult<T> $instance
         */
        $instance = new self();
        $instance->value = $value;
        $instance->result = 0;

        return $instance;
    }
}
