<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetScheduleIntervals implements RequestInterface
{
    private Guid $sessionID;

    private Guid $scheduleID;

    private \DateTimeInterface $from;

    private \DateTimeInterface $to;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $scheduleID, \DateTimeInterface $from, \DateTimeInterface $to)
    {
        $this->sessionID = $sessionID;
        $this->scheduleID = $scheduleID;
        $this->from = $from;
        $this->to = $to;
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
