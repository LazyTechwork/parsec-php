<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreateOrgUnit implements RequestInterface
{
    private string $sessionID;

    private ?OrgUnit $orgUnit = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?OrgUnit $orgUnit)
    {
        $this->sessionID = $sessionID;
        $this->orgUnit = $orgUnit;
    }

    public function getSessionID(): string
    {
        return $this->sessionID;
    }

    public function withSessionID(string $sessionID): static
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
