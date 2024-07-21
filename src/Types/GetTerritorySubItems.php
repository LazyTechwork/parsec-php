<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetTerritorySubItems implements RequestInterface
{
    private string $sessionID;

    private string $TerraID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $TerraID)
    {
        $this->sessionID = $sessionID;
        $this->TerraID = $TerraID;
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

    public function getTerraID(): string
    {
        return $this->TerraID;
    }

    public function withTerraID(string $TerraID): static
    {
        $new = clone $this;
        $new->TerraID = $TerraID;

        return $new;
    }
}
