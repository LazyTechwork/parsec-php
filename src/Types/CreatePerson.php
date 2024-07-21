<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreatePerson implements RequestInterface
{
    private Guid $sessionID;

    private ?Person $person = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?Person $person)
    {
        $this->sessionID = $sessionID;
        $this->person = $person;
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
