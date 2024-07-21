<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetSchedule implements RequestInterface
{
    private string $sessionID;

    private string $scheduleID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $scheduleID)
    {
        $this->sessionID = $sessionID;
        $this->scheduleID = $scheduleID;
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
}
