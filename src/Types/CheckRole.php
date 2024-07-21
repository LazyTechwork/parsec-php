<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CheckRole implements RequestInterface
{
    private string $sessionID;

    private ?string $roleName = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?string $roleName)
    {
        $this->sessionID = $sessionID;
        $this->roleName = $roleName;
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
