<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetHolidays implements RequestInterface
{
    private string $sessionID;

    private ?ArrayOfHoliday $holidays = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?ArrayOfHoliday $holidays)
    {
        $this->sessionID = $sessionID;
        $this->holidays = $holidays;
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
