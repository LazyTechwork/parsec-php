<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetPerson implements RequestInterface
{
    private Guid $sessionID;

    private Guid $personID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $personID)
    {
        $this->sessionID = $sessionID;
        $this->personID = $personID;
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
}
