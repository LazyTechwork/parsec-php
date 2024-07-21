<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfIdentifier
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\Identifier>|null
     */
    private ?array $Identifier = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\Identifier>|null
     */
    public function getIdentifier(): ?array
    {
        return $this->Identifier;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\Identifier>|null $Identifier
     */
    public function withIdentifier(?array $Identifier): static
    {
        $new = clone $this;
        $new->Identifier = $Identifier;

        return $new;
    }
}
