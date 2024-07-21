<?php

namespace LazyTechwork\Parsec\Types;

class GuidResult extends BaseResult
{
    private Guid $Value;

    public function getValue(): Guid
    {
        return $this->Value;
    }

    public function withValue(Guid $Value): static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
