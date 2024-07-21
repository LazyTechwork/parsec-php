<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class EventsUnsubscribeUrl implements RequestInterface
{
    private string $sessionID;

    private ?string $urlDestination = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?string $urlDestination)
    {
        $this->sessionID = $sessionID;
        $this->urlDestination = $urlDestination;
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

    public function getUrlDestination(): ?string
    {
        return $this->urlDestination;
    }

    public function withUrlDestination(?string $urlDestination): static
    {
        $new = clone $this;
        $new->urlDestination = $urlDestination;

        return $new;
    }
}
