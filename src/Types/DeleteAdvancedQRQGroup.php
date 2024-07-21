<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteAdvancedQRQGroup implements RequestInterface
{
    private string $sessionID;

    private int $groupID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, int $groupID)
    {
        $this->sessionID = $sessionID;
        $this->groupID = $groupID;
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
