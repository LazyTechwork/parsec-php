<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeletePassageRole implements RequestInterface
{
    private string $sessionID;

    private string $roleID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $roleID)
    {
        $this->sessionID = $sessionID;
        $this->roleID = $roleID;
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

    public function getRoleID(): string
    {
        return $this->roleID;
    }

    public function withRoleID(string $roleID): static
    {
        $new = clone $this;
        $new->roleID = $roleID;

        return $new;
    }
}
