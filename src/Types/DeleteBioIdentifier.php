<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteBioIdentifier implements RequestInterface
{
    private Guid $sessionID;

    private Guid $identifierID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $identifierID)
    {
        $this->sessionID = $sessionID;
        $this->identifierID = $identifierID;
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

    public function getIdentifierID(): Guid
    {
        return $this->identifierID;
    }

    public function withIdentifierID(Guid $identifierID): static
    {
        $new = clone $this;
        $new->identifierID = $identifierID;

        return $new;
    }
}
