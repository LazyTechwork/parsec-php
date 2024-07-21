<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CloseAllActiveVisitorRequests implements RequestInterface
{
    private string $sessionID;

    private string $visitorID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $visitorID)
    {
        $this->sessionID = $sessionID;
        $this->visitorID = $visitorID;
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

    public function getVisitorID(): string
    {
        return $this->visitorID;
    }

    public function withVisitorID(string $visitorID): static
    {
        $new = clone $this;
        $new->visitorID = $visitorID;

        return $new;
    }
}
