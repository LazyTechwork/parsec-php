<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetVisitorRequestWithAudit implements RequestInterface
{
    private string $sessionID;

    private string $requestID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $requestID)
    {
        $this->sessionID = $sessionID;
        $this->requestID = $requestID;
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

    public function getRequestID(): string
    {
        return $this->requestID;
    }

    public function withRequestID(string $requestID): static
    {
        $new = clone $this;
        $new->requestID = $requestID;

        return $new;
    }
}
