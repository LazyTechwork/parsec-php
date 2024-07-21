<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreateAdvancedQRQGroup implements RequestInterface
{
    private Guid $sessionID;

    private int $groupID;

    private ?string $groupName = null;

    private ?ArrayOfGuid $territories = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, int $groupID, ?string $groupName, ?ArrayOfGuid $territories)
    {
        $this->sessionID = $sessionID;
        $this->groupID = $groupID;
        $this->groupName = $groupName;
        $this->territories = $territories;
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

    public function getGroupID(): int
    {
        return $this->groupID;
    }

    public function withGroupID(int $groupID): static
    {
        $new = clone $this;
        $new->groupID = $groupID;

        return $new;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function withGroupName(?string $groupName): static
    {
        $new = clone $this;
        $new->groupName = $groupName;

        return $new;
    }

    public function getTerritories(): ?ArrayOfGuid
    {
        return $this->territories;
    }

    public function withTerritories(?ArrayOfGuid $territories): static
    {
        $new = clone $this;
        $new->territories = $territories;

        return $new;
    }
}
