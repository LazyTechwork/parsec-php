<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfBaseTerritory
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\BaseTerritory>|null
     */
    private ?array $BaseTerritory = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\BaseTerritory>|null
     */
    public function getBaseTerritory(): ?array
    {
        return $this->BaseTerritory;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\BaseTerritory>|null $BaseTerritory
     */
    public function withBaseTerritory(?array $BaseTerritory): static
    {
        $new = clone $this;
        $new->BaseTerritory = $BaseTerritory;

        return $new;
    }
}
