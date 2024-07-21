<?php

namespace LazyTechwork\Parsec\Types;

class ObjectResult extends BaseResult
{
    /**
     * @var mixed|null
     */
    private mixed $Value = null;

    /**
     * @return mixed|null
     */
    public function getValue(): mixed
    {
        return $this->Value;
    }

    /**
     * @param mixed|null $Value
     */
    public function withValue(mixed $Value): static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
