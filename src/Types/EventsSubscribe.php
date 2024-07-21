<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class EventsSubscribe implements RequestInterface
{
    private Guid $sessionID;

    private ?EventFilter $eventFilter = null;

    private int $eventFormat;

    private int $httpMethod;

    private ?string $urlDestination = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?EventFilter $eventFilter, int $eventFormat, int $httpMethod, ?string $urlDestination)
    {
        $this->sessionID = $sessionID;
        $this->eventFilter = $eventFilter;
        $this->eventFormat = $eventFormat;
        $this->httpMethod = $httpMethod;
        $this->urlDestination = $urlDestination;
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

    public function getEventFilter(): ?EventFilter
    {
        return $this->eventFilter;
    }

    public function withEventFilter(?EventFilter $eventFilter): static
    {
        $new = clone $this;
        $new->eventFilter = $eventFilter;

        return $new;
    }

    public function getEventFormat(): int
    {
        return $this->eventFormat;
    }

    public function withEventFormat(int $eventFormat): static
    {
        $new = clone $this;
        $new->eventFormat = $eventFormat;

        return $new;
    }

    public function getHttpMethod(): int
    {
        return $this->httpMethod;
    }

    public function withHttpMethod(int $httpMethod): static
    {
        $new = clone $this;
        $new->httpMethod = $httpMethod;

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
