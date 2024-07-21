<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetAllBioIdentifiers implements RequestInterface
{
    private string $sessionID;

    private ?string $systemID = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?string $systemID)
    {
        $this->sessionID = $sessionID;
        $this->systemID = $systemID;
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
