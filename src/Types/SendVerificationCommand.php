<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SendVerificationCommand implements RequestInterface
{
    private string $sessionID;

    private string $territoryID;

    private string $personID;

    private bool $passAllow;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $territoryID, string $personID, bool $passAllow)
    {
        $this->sessionID = $sessionID;
        $this->territoryID = $territoryID;
        $this->personID = $personID;
        $this->passAllow = $passAllow;
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

    public function getTerritoryID(): string
    {
        return $this->territoryID;
    }

    public function withTerritoryID(string $territoryID): static
    {
        $new = clone $this;
        $new->territoryID = $territoryID;

        return $new;
    }

    public function getPersonID(): string
    {
        return $this->personID;
    }

    public function withPersonID(string $personID): static
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
