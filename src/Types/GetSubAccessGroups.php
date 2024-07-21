<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetSubAccessGroups implements RequestInterface
{
    private Guid $sessionID;

    private Guid $accessGroupID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $accessGroupID)
    {
        $this->sessionID = $sessionID;
        $this->accessGroupID = $accessGroupID;
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

    public function getAccessGroupID(): Guid
    {
        return $this->accessGroupID;
    }

    public function withAccessGroupID(Guid $accessGroupID): static
    {
        $new = clone $this;
        $new->accessGroupID = $accessGroupID;

        return $new;
    }
}
