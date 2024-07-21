<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SaveSchedule implements RequestInterface
{
    private Guid $sessionID;

    private ?Schedule $schedule = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?Schedule $schedule)
    {
        $this->sessionID = $sessionID;
        $this->schedule = $schedule;
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

    public function getSchedule(): ?Schedule
    {
        return $this->schedule;
    }

    public function withSchedule(?Schedule $schedule): static
    {
        $new = clone $this;
        $new->schedule = $schedule;

        return $new;
    }
}
