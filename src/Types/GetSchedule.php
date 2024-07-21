<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetSchedule implements RequestInterface
{
    private Guid $sessionID;

    private Guid $scheduleID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $scheduleID)
    {
        $this->sessionID = $sessionID;
        $this->scheduleID = $scheduleID;
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
}
