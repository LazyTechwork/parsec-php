<?php

namespace LazyTechwork\Parsec\Types;

class EventObject extends BaseObject
{
    private ?ArrayOfAnyType $Values = null;

    public function getValues(): ?ArrayOfAnyType
    {
        return $this->Values;
    }

    public function withValues(?ArrayOfAnyType $Values): static
    {
        $new = clone $this;
        $new->Values = $Values;

        return $new;
    }
}
