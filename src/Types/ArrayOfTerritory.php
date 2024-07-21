<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfTerritory
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\Territory>|null
     */
    private ?array $Territory = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\Territory>|null
     */
    public function getTerritory(): ?array
    {
        return $this->Territory;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\Territory>|null $Territory
     */
    public function withTerritory(?array $Territory): static
    {
        $new = clone $this;
        $new->Territory = $Territory;

        return $new;
    }
}
