<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetPersonWorktimeSchedule implements RequestInterface
{
    private Guid $personEditSessionID;

    private Guid $scheduleID;

    /**
     * Constructor.
     */
    public function __construct(Guid $personEditSessionID, Guid $scheduleID)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->scheduleID = $scheduleID;
    }

    public function getPersonEditSessionID(): Guid
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(Guid $personEditSessionID): static
    {
        $new = clone $this;
        $new->personEditSessionID = $personEditSessionID;

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
