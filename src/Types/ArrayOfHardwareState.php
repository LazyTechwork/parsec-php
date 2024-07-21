<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfHardwareState
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\HardwareState>|null
     */
    private ?array $HardwareState = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\HardwareState>|null
     */
    public function getHardwareState(): ?array
    {
        return $this->HardwareState;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\HardwareState>|null $HardwareState
     */
    public function withHardwareState(?array $HardwareState): static
    {
        $new = clone $this;
        $new->HardwareState = $HardwareState;

        return $new;
    }
}
