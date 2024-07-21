<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetHardwareState implements RequestInterface
{
    private string $sessionID;

    private ?ArrayOfGuid $territoryIDs = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?ArrayOfGuid $territoryIDs)
    {
        $this->sessionID = $sessionID;
        $this->territoryIDs = $territoryIDs;
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

    public function getTerritoryIDs(): ?ArrayOfGuid
    {
        return $this->territoryIDs;
    }

    public function withTerritoryIDs(?ArrayOfGuid $territoryIDs): static
    {
        $new = clone $this;
        $new->territoryIDs = $territoryIDs;

        return $new;
    }
}
