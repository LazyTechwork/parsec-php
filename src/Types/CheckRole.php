<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CheckRole implements RequestInterface
{
    private Guid $sessionID;

    private ?string $roleName = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?string $roleName)
    {
        $this->sessionID = $sessionID;
        $this->roleName = $roleName;
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

    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    public function withRoleName(?string $roleName): static
    {
        $new = clone $this;
        $new->roleName = $roleName;

        return $new;
    }
}
