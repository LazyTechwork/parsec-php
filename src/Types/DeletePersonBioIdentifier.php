<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeletePersonBioIdentifier implements RequestInterface
{
    private string $sessionID;

    private string $personID;

    private ?string $systemID = null;

    private ?string $bioID = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $personID, ?string $systemID, ?string $bioID)
    {
        $this->sessionID = $sessionID;
        $this->personID = $personID;
        $this->systemID = $systemID;
        $this->bioID = $bioID;
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
