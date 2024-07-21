<?php

namespace LazyTechwork\Parsec\Types;

class StringResult extends BaseResult
{
    private ?string $Value = null;

    public function getValue(): ?string
    {
        return $this->Value;
    }

    public function withValue(?string $Value): static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
