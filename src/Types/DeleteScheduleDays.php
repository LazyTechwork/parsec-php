<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteScheduleDays implements RequestInterface
{
    private string $sessionID;

    private string $scheduleID;

    private ?ArrayOfDateTime $days = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $scheduleID, ?ArrayOfDateTime $days)
    {
        $this->sessionID = $sessionID;
        $this->scheduleID = $scheduleID;
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

    public function getDays(): ?ArrayOfDateTime
    {
        return $this->days;
    }

    public function withDays(?ArrayOfDateTime $days): static
    {
        $new = clone $this;
        $new->days = $days;

        return $new;
    }
}
