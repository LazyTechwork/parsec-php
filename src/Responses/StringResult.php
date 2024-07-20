<?php

namespace LazyTechwork\Parsec\Responses;

/**
 * Класс используется в качестве результата в функциях, возвращающих String.
 */
final class StringResult extends BaseResult
{
    private string $value;

    public function getValue(): string
    {
        return $this->value;
    }

    public static function fromStdClass(\stdClass $obj): static
    {
        $instance = parent::fromStdClass($obj);
        $instance->value = $obj->Value;

        return $instance;
    }
}
