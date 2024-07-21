<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SaveBioIdentifier implements RequestInterface
{
    private string $sessionID;

    private ?BioIdentifier $bioIdentifier = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?BioIdentifier $bioIdentifier)
    {
        $this->sessionID = $sessionID;
        $this->bioIdentifier = $bioIdentifier;
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

    public function getBioIdentifier(): ?BioIdentifier
    {
        return $this->bioIdentifier;
    }

    public function withBioIdentifier(?BioIdentifier $bioIdentifier): static
    {
        $new = clone $this;
        $new->bioIdentifier = $bioIdentifier;

        return $new;
    }
}
