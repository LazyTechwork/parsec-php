<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CloseEventHistorySession implements RequestInterface
{
    private Guid $sessionID;

    private Guid $eventHistorySessionID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $eventHistorySessionID)
    {
        $this->sessionID = $sessionID;
        $this->eventHistorySessionID = $eventHistorySessionID;
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

    public function getEventHistorySessionID(): Guid
    {
        return $this->eventHistorySessionID;
    }

    public function withEventHistorySessionID(Guid $eventHistorySessionID): static
    {
        $new = clone $this;
        $new->eventHistorySessionID = $eventHistorySessionID;

        return $new;
    }
}
