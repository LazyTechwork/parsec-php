<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreatePerson implements RequestInterface
{
    private string $sessionID;

    private ?Person $person = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?Person $person)
    {
        $this->sessionID = $sessionID;
        $this->person = $person;
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

    public function getPerson(): ?Person
    {
        return $this->person;
    }

    public function withPerson(?Person $person): static
    {
        $new = clone $this;
        $new->person = $person;

        return $new;
    }
}
