<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteSubAccessGroup implements RequestInterface
{
    private string $sessionID;

    private string $accessGroupID;

    private string $subGroupID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $accessGroupID, string $subGroupID)
    {
        $this->sessionID = $sessionID;
        $this->accessGroupID = $accessGroupID;
        $this->subGroupID = $subGroupID;
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

    public function getSubGroupID(): string
    {
        return $this->subGroupID;
    }

    public function withSubGroupID(string $subGroupID): static
    {
        $new = clone $this;
        $new->subGroupID = $subGroupID;

        return $new;
    }
}
