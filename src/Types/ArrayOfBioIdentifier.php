<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfBioIdentifier
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\BioIdentifier>|null
     */
    private ?array $BioIdentifier = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\BioIdentifier>|null
     */
    public function getBioIdentifier(): ?array
    {
        return $this->BioIdentifier;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\BioIdentifier>|null $BioIdentifier
     */
    public function withBioIdentifier(?array $BioIdentifier): static
    {
        $new = clone $this;
        $new->BioIdentifier = $BioIdentifier;

        return $new;
    }
}
