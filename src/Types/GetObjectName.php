<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetObjectName implements RequestInterface
{
    private string $sessionID;

    private string $objectID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $objectID)
    {
        $this->sessionID = $sessionID;
        $this->objectID = $objectID;
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

    public function getObjectID(): string
    {
        return $this->objectID;
    }

    public function withObjectID(string $objectID): static
    {
        $new = clone $this;
        $new->objectID = $objectID;

        return $new;
    }
}
