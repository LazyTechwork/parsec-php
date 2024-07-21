<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetTerritory implements RequestInterface
{
    private Guid $sessionID;

    private Guid $territoryID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $territoryID)
    {
        $this->sessionID = $sessionID;
        $this->territoryID = $territoryID;
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
}
