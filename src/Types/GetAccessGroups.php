<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetAccessGroups implements RequestInterface
{
    private string $sessionID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID)
    {
        $this->sessionID = $sessionID;
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
}
