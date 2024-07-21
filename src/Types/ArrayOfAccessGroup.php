<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfAccessGroup
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\AccessGroup>|null
     */
    private ?array $AccessGroup = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\AccessGroup>|null
     */
    public function getAccessGroup(): ?array
    {
        return $this->AccessGroup;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\AccessGroup>|null $AccessGroup
     */
    public function withAccessGroup(?array $AccessGroup): static
    {
        $new = clone $this;
        $new->AccessGroup = $AccessGroup;

        return $new;
    }
}
