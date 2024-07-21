<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetScheduleDays implements RequestInterface
{
    private Guid $sessionID;

    private Guid $scheduleID;

    private ?ArrayOfScheduleDay $days = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $scheduleID, ?ArrayOfScheduleDay $days)
    {
        $this->sessionID = $sessionID;
        $this->scheduleID = $scheduleID;
        $this->days = $days;
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

    public function getDays(): ?ArrayOfScheduleDay
    {
        return $this->days;
    }

    public function withDays(?ArrayOfScheduleDay $days): static
    {
        $new = clone $this;
        $new->days = $days;

        return $new;
    }
}
