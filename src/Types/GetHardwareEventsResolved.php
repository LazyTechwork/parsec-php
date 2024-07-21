<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetHardwareEventsResolved implements RequestInterface
{
    private Guid $sessionID;

    private int $fromIndex;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, int $fromIndex)
    {
        $this->sessionID = $sessionID;
        $this->fromIndex = $fromIndex;
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

    public function getFromIndex(): int
    {
        return $this->fromIndex;
    }

    public function withFromIndex(int $fromIndex): static
    {
        $new = clone $this;
        $new->fromIndex = $fromIndex;

        return $new;
    }
}
