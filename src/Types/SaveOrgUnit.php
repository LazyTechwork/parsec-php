<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SaveOrgUnit implements RequestInterface
{
    private Guid $orgUnitEditSessionID;

    private ?BaseOrgUnit $orgUnit = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $orgUnitEditSessionID, ?BaseOrgUnit $orgUnit)
    {
        $this->orgUnitEditSessionID = $orgUnitEditSessionID;
        $this->orgUnit = $orgUnit;
    }

    public function getOrgUnitEditSessionID(): Guid
    {
        return $this->orgUnitEditSessionID;
    }

    public function withOrgUnitEditSessionID(Guid $orgUnitEditSessionID): static
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
