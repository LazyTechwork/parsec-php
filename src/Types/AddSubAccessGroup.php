<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AddSubAccessGroup implements RequestInterface
{
    private string $sessionID;

    private string $accessGroupID;

    private string $scheduleID;

    private ?ArrayOfGuid $territories = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $accessGroupID, string $scheduleID, ?ArrayOfGuid $territories)
    {
        $this->sessionID = $sessionID;
        $this->accessGroupID = $accessGroupID;
        $this->scheduleID = $scheduleID;
        $this->territories = $territories;
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

    public function getAccessGroupID(): string
    {
        return $this->accessGroupID;
    }

    public function withAccessGroupID(string $accessGroupID): static
    {
        $new = clone $this;
        $new->accessGroupID = $accessGroupID;

        return $new;
    }

    public function getScheduleID(): string
    {
        return $this->scheduleID;
    }

    public function withScheduleID(string $scheduleID): static
    {
        $new = clone $this;
        $new->scheduleID = $scheduleID;

        return $new;
    }

    public function getTerritories(): ?ArrayOfGuid
    {
        return $this->territories;
    }

    public function withTerritories(?ArrayOfGuid $territories): static
    {
        $new = clone $this;
        $new->territories = $territories;

        return $new;
    }
}
