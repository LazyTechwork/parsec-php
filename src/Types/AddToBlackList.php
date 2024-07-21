<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AddToBlackList implements RequestInterface
{
    private string $sessionID;

    private string $personID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $personID)
    {
        $this->sessionID = $sessionID;
        $this->personID = $personID;
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

    public function getPersonID(): string
    {
        return $this->personID;
    }

    public function withPersonID(string $personID): static
    {
        $new = clone $this;
        $new->personID = $personID;

        return $new;
    }
}
