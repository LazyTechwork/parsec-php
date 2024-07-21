<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfSubAccessGroup
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\SubAccessGroup>|null
     */
    private ?array $SubAccessGroup = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\SubAccessGroup>|null
     */
    public function getSubAccessGroup(): ?array
    {
        return $this->SubAccessGroup;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\SubAccessGroup>|null $SubAccessGroup
     */
    public function withSubAccessGroup(?array $SubAccessGroup): static
    {
        $new = clone $this;
        $new->SubAccessGroup = $SubAccessGroup;

        return $new;
    }
}
