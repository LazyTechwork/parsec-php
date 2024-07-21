<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreateWorktimeSchedule implements RequestInterface
{
    private string $sessionID;

    private ?WorktimeSchedule $schedule = null;

    private ?ArrayOfScheduleDay $days = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?WorktimeSchedule $schedule, ?ArrayOfScheduleDay $days)
    {
        $this->sessionID = $sessionID;
        $this->schedule = $schedule;
        $this->days = $days;
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

    public function getSchedule(): ?WorktimeSchedule
    {
        return $this->schedule;
    }

    public function withSchedule(?WorktimeSchedule $schedule): static
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
