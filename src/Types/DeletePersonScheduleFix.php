<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeletePersonScheduleFix implements RequestInterface
{
    private Guid $sessionID;

    private Guid $personID;

    private Guid $fixID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $personID, Guid $fixID)
    {
        $this->sessionID = $sessionID;
        $this->personID = $personID;
        $this->fixID = $fixID;
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

    public function getPersonID(): Guid
    {
        return $this->personID;
    }

    public function withPersonID(Guid $personID): static
    {
        $new = clone $this;
        $new->personID = $personID;

        return $new;
    }

    public function getFixID(): Guid
    {
        return $this->fixID;
    }

    public function withFixID(Guid $fixID): static
    {
        $new = clone $this;
        $new->fixID = $fixID;

        return $new;
    }
}
