<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetScheduleFix implements RequestInterface
{
    private Guid $sessionID;

    private Guid $scheduleID;

    private ?ArrayOfScheduleFix $fixes = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $scheduleID, ?ArrayOfScheduleFix $fixes)
    {
        $this->sessionID = $sessionID;
        $this->scheduleID = $scheduleID;
        $this->fixes = $fixes;
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

    public function getFixes(): ?ArrayOfScheduleFix
    {
        return $this->fixes;
    }

    public function withFixes(?ArrayOfScheduleFix $fixes): static
    {
        $new = clone $this;
        $new->fixes = $fixes;

        return $new;
    }
}
