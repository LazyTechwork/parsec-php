<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetMultiplePersons implements RequestInterface
{
    private string $sessionID;

    private ?ArrayOfGuid $personIDs = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?ArrayOfGuid $personIDs)
    {
        $this->sessionID = $sessionID;
        $this->personIDs = $personIDs;
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

    public function getPersonIDs(): ?ArrayOfGuid
    {
        return $this->personIDs;
    }

    public function withPersonIDs(?ArrayOfGuid $personIDs): static
    {
        $new = clone $this;
        $new->personIDs = $personIDs;

        return $new;
    }
}
