<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SavePassageRole implements RequestInterface
{
    private Guid $sessionID;

    private ?PassageRole $role = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?PassageRole $role)
    {
        $this->sessionID = $sessionID;
        $this->role = $role;
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
