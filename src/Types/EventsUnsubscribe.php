<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class EventsUnsubscribe implements RequestInterface
{
    private Guid $sessionID;

    private Guid $subscriptionID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $subscriptionID)
    {
        $this->sessionID = $sessionID;
        $this->subscriptionID = $subscriptionID;
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

    public function getSubscriptionID(): Guid
    {
        return $this->subscriptionID;
    }

    public function withSubscriptionID(Guid $subscriptionID): static
    {
        $new = clone $this;
        $new->subscriptionID = $subscriptionID;

        return $new;
    }
}
