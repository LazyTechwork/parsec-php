<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeletePersonScheduleFix implements RequestInterface
{
    private string $sessionID;

    private string $personID;

    private string $fixID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $personID, string $fixID)
    {
        $this->sessionID = $sessionID;
        $this->personID = $personID;
        $this->fixID = $fixID;
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

    public function getFixID(): string
    {
        return $this->fixID;
    }

    public function withFixID(string $fixID): static
    {
        $new = clone $this;
        $new->fixID = $fixID;

        return $new;
    }
}
