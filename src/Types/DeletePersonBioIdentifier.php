<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeletePersonBioIdentifier implements RequestInterface
{
    private Guid $sessionID;

    private Guid $personID;

    private ?string $systemID = null;

    private ?string $bioID = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $personID, ?string $systemID, ?string $bioID)
    {
        $this->sessionID = $sessionID;
        $this->personID = $personID;
        $this->systemID = $systemID;
        $this->bioID = $bioID;
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

    public function getBioID(): ?string
    {
        return $this->bioID;
    }

    public function withBioID(?string $bioID): static
    {
        $new = clone $this;
        $new->bioID = $bioID;

        return $new;
    }
}
