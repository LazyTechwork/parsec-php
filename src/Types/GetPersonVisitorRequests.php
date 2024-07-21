<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetPersonVisitorRequests implements RequestInterface
{
    private string $sessionID;

    private string $visitorID;

    private bool $issued;

    private bool $accepted;

    private bool $declined;

    private bool $active;

    private bool $completed;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $visitorID, bool $issued, bool $accepted, bool $declined, bool $active, bool $completed)
    {
        $this->sessionID = $sessionID;
        $this->visitorID = $visitorID;
        $this->issued = $issued;
        $this->accepted = $accepted;
        $this->declined = $declined;
        $this->active = $active;
        $this->completed = $completed;
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

    public function isIssued(): bool
    {
        return $this->issued;
    }

    public function withIssued(bool $issued): static
    {
        $new = clone $this;
        $new->issued = $issued;

        return $new;
    }

    public function isAccepted(): bool
    {
        return $this->accepted;
    }

    public function withAccepted(bool $accepted): static
    {
        $new = clone $this;
        $new->accepted = $accepted;

        return $new;
    }

    public function isDeclined(): bool
    {
        return $this->declined;
    }

    public function withDeclined(bool $declined): static
    {
        $new = clone $this;
        $new->declined = $declined;

        return $new;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function withActive(bool $active): static
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }

    public function withCompleted(bool $completed): static
    {
        $new = clone $this;
        $new->completed = $completed;

        return $new;
    }
}
