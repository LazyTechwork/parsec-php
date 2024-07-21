<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetOrgUnitSubItems implements RequestInterface
{
    private Guid $sessionID;

    private Guid $orgUnitID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $orgUnitID)
    {
        $this->sessionID = $sessionID;
        $this->orgUnitID = $orgUnitID;
    }

    public function getSessionID(): Guid
    {
        return $this->sessionID;
    }

    public function withSessionID(Guid $sessionID): static
    {
        $new = clone $this;
        $new->sessionID = $sessionID;

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
