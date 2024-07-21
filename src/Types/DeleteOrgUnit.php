<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteOrgUnit implements RequestInterface
{
    private string $sessionID;

    private string $orgUnitID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $orgUnitID)
    {
        $this->sessionID = $sessionID;
        $this->orgUnitID = $orgUnitID;
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
