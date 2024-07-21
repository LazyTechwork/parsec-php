<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetMultiplePersons implements RequestInterface
{
    private Guid $sessionID;

    private ?ArrayOfGuid $personIDs = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?ArrayOfGuid $personIDs)
    {
        $this->sessionID = $sessionID;
        $this->personIDs = $personIDs;
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
