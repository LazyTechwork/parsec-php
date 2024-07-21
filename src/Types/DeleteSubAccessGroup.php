<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteSubAccessGroup implements RequestInterface
{
    private Guid $sessionID;

    private Guid $accessGroupID;

    private Guid $subGroupID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $accessGroupID, Guid $subGroupID)
    {
        $this->sessionID = $sessionID;
        $this->accessGroupID = $accessGroupID;
        $this->subGroupID = $subGroupID;
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

    public function getSubGroupID(): Guid
    {
        return $this->subGroupID;
    }

    public function withSubGroupID(Guid $subGroupID): static
    {
        $new = clone $this;
        $new->subGroupID = $subGroupID;

        return $new;
    }
}
