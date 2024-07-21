<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfEventObject
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\EventObject>|null
     */
    private ?array $EventObject = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\EventObject>|null
     */
    public function getEventObject(): ?array
    {
        return $this->EventObject;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\EventObject>|null $EventObject
     */
    public function withEventObject(?array $EventObject): static
    {
        $new = clone $this;
        $new->EventObject = $EventObject;

        return $new;
    }
}
