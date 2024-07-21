<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetInheritedAccessGroups implements RequestInterface
{
    private Guid $sessionID;

    private Guid $accessGroupID;

    private ?ArrayOfGuid $inheritedGroups = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $accessGroupID, ?ArrayOfGuid $inheritedGroups)
    {
        $this->sessionID = $sessionID;
        $this->accessGroupID = $accessGroupID;
        $this->inheritedGroups = $inheritedGroups;
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

    public function getInheritedGroups(): ?ArrayOfGuid
    {
        return $this->inheritedGroups;
    }

    public function withInheritedGroups(?ArrayOfGuid $inheritedGroups): static
    {
        $new = clone $this;
        $new->inheritedGroups = $inheritedGroups;

        return $new;
    }
}
