<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class EventsUnsubscribe implements RequestInterface
{
    private string $sessionID;

    private string $subscriptionID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $subscriptionID)
    {
        $this->sessionID = $sessionID;
        $this->subscriptionID = $subscriptionID;
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

    public function getSubscriptionID(): string
    {
        return $this->subscriptionID;
    }

    public function withSubscriptionID(string $subscriptionID): static
    {
        $new = clone $this;
        $new->subscriptionID = $subscriptionID;

        return $new;
    }
}
