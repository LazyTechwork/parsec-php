<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreateAccessSchedule implements RequestInterface
{
    private Guid $sessionID;

    private ?AccessSchedule $schedule = null;

    private ?ArrayOfScheduleDay $days = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?AccessSchedule $schedule, ?ArrayOfScheduleDay $days)
    {
        $this->sessionID = $sessionID;
        $this->schedule = $schedule;
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

    public function getSchedule(): ?AccessSchedule
    {
        return $this->schedule;
    }

    public function withSchedule(?AccessSchedule $schedule): static
    {
        $new = clone $this;
        $new->schedule = $schedule;

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
