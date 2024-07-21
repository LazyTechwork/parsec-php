<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CloseAllActiveVisitorRequests implements RequestInterface
{
    private Guid $sessionID;

    private Guid $visitorID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $visitorID)
    {
        $this->sessionID = $sessionID;
        $this->visitorID = $visitorID;
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

    public function getVisitorID(): Guid
    {
        return $this->visitorID;
    }

    public function withVisitorID(Guid $visitorID): static
    {
        $new = clone $this;
        $new->visitorID = $visitorID;

        return $new;
    }
}
