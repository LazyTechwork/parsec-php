<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetHolidays implements RequestInterface
{
    private Guid $sessionID;

    private ?ArrayOfHoliday $holidays = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?ArrayOfHoliday $holidays)
    {
        $this->sessionID = $sessionID;
        $this->holidays = $holidays;
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

    public function getHolidays(): ?ArrayOfHoliday
    {
        return $this->holidays;
    }

    public function withHolidays(?ArrayOfHoliday $holidays): static
    {
        $new = clone $this;
        $new->holidays = $holidays;

        return $new;
    }
}
