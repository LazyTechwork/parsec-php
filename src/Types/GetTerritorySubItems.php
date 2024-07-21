<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetTerritorySubItems implements RequestInterface
{
    private Guid $sessionID;

    private Guid $TerraID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $TerraID)
    {
        $this->sessionID = $sessionID;
        $this->TerraID = $TerraID;
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

    public function getTerraID(): Guid
    {
        return $this->TerraID;
    }

    public function withTerraID(Guid $TerraID): static
    {
        $new = clone $this;
        $new->TerraID = $TerraID;

        return $new;
    }
}
