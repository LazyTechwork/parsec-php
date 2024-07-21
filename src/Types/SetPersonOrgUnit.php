<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetPersonOrgUnit implements RequestInterface
{
    private Guid $personEditSessionID;

    private Guid $orgUnitID;

    /**
     * Constructor.
     */
    public function __construct(Guid $personEditSessionID, Guid $orgUnitID)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->orgUnitID = $orgUnitID;
    }

    public function getPersonEditSessionID(): Guid
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(Guid $personEditSessionID): static
    {
        $new = clone $this;
        $new->personEditSessionID = $personEditSessionID;

        return $new;
    }

    public function getOrgUnitID(): Guid
    {
        return $this->orgUnitID;
    }

    public function withOrgUnitID(Guid $orgUnitID): static
    {
        $new = clone $this;
        $new->orgUnitID = $orgUnitID;

        return $new;
    }
}
