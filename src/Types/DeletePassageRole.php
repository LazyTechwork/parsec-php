<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeletePassageRole implements RequestInterface
{
    private Guid $sessionID;

    private Guid $roleID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $roleID)
    {
        $this->sessionID = $sessionID;
        $this->roleID = $roleID;
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

    public function getRoleID(): Guid
    {
        return $this->roleID;
    }

    public function withRoleID(Guid $roleID): static
    {
        $new = clone $this;
        $new->roleID = $roleID;

        return $new;
    }
}
