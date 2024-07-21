<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreateTempAccessGroup implements RequestInterface
{
    private Guid $sessionID;

    private Guid $scheduleID;

    private ?ArrayOfGuid $territories = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $scheduleID, ?ArrayOfGuid $territories)
    {
        $this->sessionID = $sessionID;
        $this->scheduleID = $scheduleID;
        $this->territories = $territories;
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

    public function getScheduleID(): Guid
    {
        return $this->scheduleID;
    }

    public function withScheduleID(Guid $scheduleID): static
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
