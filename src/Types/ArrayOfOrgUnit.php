<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfOrgUnit
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\OrgUnit>|null
     */
    private ?array $OrgUnit = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\OrgUnit>|null
     */
    public function getOrgUnit(): ?array
    {
        return $this->OrgUnit;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\OrgUnit>|null $OrgUnit
     */
    public function withOrgUnit(?array $OrgUnit): static
    {
        $new = clone $this;
        $new->OrgUnit = $OrgUnit;

        return $new;
    }
}
