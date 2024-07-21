<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteAdvancedQRQGroup implements RequestInterface
{
    private Guid $sessionID;

    private int $groupID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, int $groupID)
    {
        $this->sessionID = $sessionID;
        $this->groupID = $groupID;
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
}
