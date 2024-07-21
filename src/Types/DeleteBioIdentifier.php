<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteBioIdentifier implements RequestInterface
{
    private string $sessionID;

    private string $identifierID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $identifierID)
    {
        $this->sessionID = $sessionID;
        $this->identifierID = $identifierID;
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

    public function getIdentifierID(): string
    {
        return $this->identifierID;
    }

    public function withIdentifierID(string $identifierID): static
    {
        $new = clone $this;
        $new->identifierID = $identifierID;

        return $new;
    }
}
