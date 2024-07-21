<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AddBioIdentifier implements RequestInterface
{
    private Guid $sessionID;

    private ?BioIdentifier $bioIdentifier = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?BioIdentifier $bioIdentifier)
    {
        $this->sessionID = $sessionID;
        $this->bioIdentifier = $bioIdentifier;
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
