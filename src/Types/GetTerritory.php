<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetTerritory implements RequestInterface
{
    private string $sessionID;

    private string $territoryID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $territoryID)
    {
        $this->sessionID = $sessionID;
        $this->territoryID = $territoryID;
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
}
