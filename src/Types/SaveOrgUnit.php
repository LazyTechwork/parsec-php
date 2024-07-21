<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SaveOrgUnit implements RequestInterface
{
    private string $orgUnitEditSessionID;

    private ?BaseOrgUnit $orgUnit = null;

    /**
     * Constructor.
     */
    public function __construct(string $orgUnitEditSessionID, ?BaseOrgUnit $orgUnit)
    {
        $this->orgUnitEditSessionID = $orgUnitEditSessionID;
        $this->orgUnit = $orgUnit;
    }

    public function getOrgUnitEditSessionID(): string
    {
        return $this->orgUnitEditSessionID;
    }

    public function withOrgUnitEditSessionID(string $orgUnitEditSessionID): static
    {
        $new = clone $this;
        $new->orgUnitEditSessionID = $orgUnitEditSessionID;

        return $new;
    }

    public function getOrgUnit(): ?BaseOrgUnit
    {
        return $this->orgUnit;
    }

    public function withOrgUnit(?BaseOrgUnit $orgUnit): static
    {
        $new = clone $this;
        $new->orgUnit = $orgUnit;

        return $new;
    }
}
