<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetHardwareState implements RequestInterface
{
    private Guid $sessionID;

    private ?ArrayOfGuid $territoryIDs = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?ArrayOfGuid $territoryIDs)
    {
        $this->sessionID = $sessionID;
        $this->territoryIDs = $territoryIDs;
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
