<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ActivateVisitorRequest implements RequestInterface
{
    private Guid $sessionID;

    private Guid $requestID;

    private ?string $cardCode = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $requestID, ?string $cardCode)
    {
        $this->sessionID = $sessionID;
        $this->requestID = $requestID;
        $this->cardCode = $cardCode;
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
