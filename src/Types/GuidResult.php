<?php

namespace LazyTechwork\Parsec\Types;

class GuidResult extends BaseResult
{
    private string $Value;

    public function getValue(): string
    {
        return $this->Value;
    }

    public function withValue(string $Value): static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
