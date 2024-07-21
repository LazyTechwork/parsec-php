<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetPersonOrgUnit implements RequestInterface
{
    private string $personEditSessionID;

    private string $orgUnitID;

    /**
     * Constructor.
     */
    public function __construct(string $personEditSessionID, string $orgUnitID)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->orgUnitID = $orgUnitID;
    }

    public function getPersonEditSessionID(): string
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(string $personEditSessionID): static
    {
        $new = clone $this;
        $new->personEditSessionID = $personEditSessionID;

        return $new;
    }

    public function getOrgUnitID(): string
    {
        return $this->orgUnitID;
    }

    public function withOrgUnitID(string $orgUnitID): static
    {
        $new = clone $this;
        $new->orgUnitID = $orgUnitID;

        return $new;
    }
}
