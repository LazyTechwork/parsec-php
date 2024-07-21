<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CloseVisitorRequest implements RequestInterface
{
    private Guid $sessionID;

    private Guid $requestID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $requestID)
    {
        $this->sessionID = $sessionID;
        $this->requestID = $requestID;
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

    public function getRequestID(): Guid
    {
        return $this->requestID;
    }

    public function withRequestID(Guid $requestID): static
    {
        $new = clone $this;
        $new->requestID = $requestID;

        return $new;
    }
}
