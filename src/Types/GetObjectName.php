<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetObjectName implements RequestInterface
{
    private Guid $sessionID;

    private Guid $objectID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $objectID)
    {
        $this->sessionID = $sessionID;
        $this->objectID = $objectID;
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

    public function getObjectID(): Guid
    {
        return $this->objectID;
    }

    public function withObjectID(Guid $objectID): static
    {
        $new = clone $this;
        $new->objectID = $objectID;

        return $new;
    }
}
