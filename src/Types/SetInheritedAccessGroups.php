<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetInheritedAccessGroups implements RequestInterface
{
    private string $sessionID;

    private string $accessGroupID;

    private ?ArrayOfGuid $inheritedGroups = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $accessGroupID, ?ArrayOfGuid $inheritedGroups)
    {
        $this->sessionID = $sessionID;
        $this->accessGroupID = $accessGroupID;
        $this->inheritedGroups = $inheritedGroups;
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
