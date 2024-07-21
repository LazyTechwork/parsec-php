<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfDomain
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\Domain>|null
     */
    private ?array $Domain = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\Domain>|null
     */
    public function getDomain(): ?array
    {
        return $this->Domain;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\Domain>|null $Domain
     */
    public function withDomain(?array $Domain): static
    {
        $new = clone $this;
        $new->Domain = $Domain;

        return $new;
    }
}
