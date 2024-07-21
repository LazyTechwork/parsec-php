<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CloseEventHistorySession implements RequestInterface
{
    private string $sessionID;

    private string $eventHistorySessionID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $eventHistorySessionID)
    {
        $this->sessionID = $sessionID;
        $this->eventHistorySessionID = $eventHistorySessionID;
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

    public function getEventHistorySessionID(): string
    {
        return $this->eventHistorySessionID;
    }

    public function withEventHistorySessionID(string $eventHistorySessionID): static
    {
        $new = clone $this;
        $new->eventHistorySessionID = $eventHistorySessionID;

        return $new;
    }
}
