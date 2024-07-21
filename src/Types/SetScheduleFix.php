<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetScheduleFix implements RequestInterface
{
    private string $sessionID;

    private string $scheduleID;

    private ?ArrayOfScheduleFix $fixes = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $scheduleID, ?ArrayOfScheduleFix $fixes)
    {
        $this->sessionID = $sessionID;
        $this->scheduleID = $scheduleID;
        $this->fixes = $fixes;
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
