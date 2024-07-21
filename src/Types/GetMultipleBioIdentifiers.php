<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetMultipleBioIdentifiers implements RequestInterface
{
    private Guid $sessionID;

    private ?ArrayOfGuid $personIDs = null;

    private ?string $systemID = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?ArrayOfGuid $personIDs, ?string $systemID)
    {
        $this->sessionID = $sessionID;
        $this->personIDs = $personIDs;
        $this->systemID = $systemID;
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

    public function getSystemID(): ?string
    {
        return $this->systemID;
    }

    public function withSystemID(?string $systemID): static
    {
        $new = clone $this;
        $new->systemID = $systemID;

        return $new;
    }
}
