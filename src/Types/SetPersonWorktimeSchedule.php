<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetPersonWorktimeSchedule implements RequestInterface
{
    private string $personEditSessionID;

    private string $scheduleID;

    /**
     * Constructor.
     */
    public function __construct(string $personEditSessionID, string $scheduleID)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->scheduleID = $scheduleID;
    }

    public function getPersonEditSessionID(): string
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(string $personEditSessionID): static
    {
        $new = clone $this;
        $new->personEditSessionID = $personEditSessionID;

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
