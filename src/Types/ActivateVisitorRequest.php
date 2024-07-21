<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ActivateVisitorRequest implements RequestInterface
{
    private string $sessionID;

    private string $requestID;

    private ?string $cardCode = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $requestID, ?string $cardCode)
    {
        $this->sessionID = $sessionID;
        $this->requestID = $requestID;
        $this->cardCode = $cardCode;
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

    public function getCardCode(): ?string
    {
        return $this->cardCode;
    }

    public function withCardCode(?string $cardCode): static
    {
        $new = clone $this;
        $new->cardCode = $cardCode;

        return $new;
    }
}
