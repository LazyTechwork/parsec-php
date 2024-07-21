<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SendVerificationCommand implements RequestInterface
{
    private Guid $sessionID;

    private Guid $territoryID;

    private Guid $personID;

    private bool $passAllow;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $territoryID, Guid $personID, bool $passAllow)
    {
        $this->sessionID = $sessionID;
        $this->territoryID = $territoryID;
        $this->personID = $personID;
        $this->passAllow = $passAllow;
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

    public function getTerritoryID(): Guid
    {
        return $this->territoryID;
    }

    public function withTerritoryID(Guid $territoryID): static
    {
        $new = clone $this;
        $new->territoryID = $territoryID;

        return $new;
    }

    public function getPersonID(): Guid
    {
        return $this->personID;
    }

    public function withPersonID(Guid $personID): static
    {
        $new = clone $this;
        $new->personID = $personID;

        return $new;
    }

    public function isPassAllow(): bool
    {
        return $this->passAllow;
    }

    public function withPassAllow(bool $passAllow): static
    {
        $new = clone $this;
        $new->passAllow = $passAllow;

        return $new;
    }
}
