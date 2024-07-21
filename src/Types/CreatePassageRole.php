<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreatePassageRole implements RequestInterface
{
    private string $sessionID;

    private ?PassageRole $role = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?PassageRole $role)
    {
        $this->sessionID = $sessionID;
        $this->role = $role;
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

    public function getRole(): ?PassageRole
    {
        return $this->role;
    }

    public function withRole(?PassageRole $role): static
    {
        $new = clone $this;
        $new->role = $role;

        return $new;
    }
}
