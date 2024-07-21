<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetScheduleIntervals implements RequestInterface
{
    private string $sessionID;

    private string $scheduleID;

    private \DateTimeInterface $from;

    private \DateTimeInterface $to;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $scheduleID, \DateTimeInterface $from, \DateTimeInterface $to)
    {
        $this->sessionID = $sessionID;
        $this->scheduleID = $scheduleID;
        $this->from = $from;
        $this->to = $to;
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

    public function getFrom(): \DateTimeInterface
    {
        return $this->from;
    }

    public function withFrom(\DateTimeInterface $from): static
    {
        $new = clone $this;
        $new->from = $from;

        return $new;
    }

    public function getTo(): \DateTimeInterface
    {
        return $this->to;
    }

    public function withTo(\DateTimeInterface $to): static
    {
        $new = clone $this;
        $new->to = $to;

        return $new;
    }
}
