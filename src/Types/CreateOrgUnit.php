<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreateOrgUnit implements RequestInterface
{
    private Guid $sessionID;

    private ?OrgUnit $orgUnit = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?OrgUnit $orgUnit)
    {
        $this->sessionID = $sessionID;
        $this->orgUnit = $orgUnit;
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

    public function getOrgUnit(): ?OrgUnit
    {
        return $this->orgUnit;
    }

    public function withOrgUnit(?OrgUnit $orgUnit): static
    {
        $new = clone $this;
        $new->orgUnit = $orgUnit;

        return $new;
    }
}
