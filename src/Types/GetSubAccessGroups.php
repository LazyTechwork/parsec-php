<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetSubAccessGroups implements RequestInterface
{
    private string $sessionID;

    private string $accessGroupID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $accessGroupID)
    {
        $this->sessionID = $sessionID;
        $this->accessGroupID = $accessGroupID;
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

    public function getAccessGroupID(): string
    {
        return $this->accessGroupID;
    }

    public function withAccessGroupID(string $accessGroupID): static
    {
        $new = clone $this;
        $new->accessGroupID = $accessGroupID;

        return $new;
    }
}
