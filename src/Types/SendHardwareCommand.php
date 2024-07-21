<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SendHardwareCommand implements RequestInterface
{
    private Guid $sessionID;

    private Guid $territoryID;

    private int $command;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $territoryID, int $command)
    {
        $this->sessionID = $sessionID;
        $this->territoryID = $territoryID;
        $this->command = $command;
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

    public function getTerritoryID(): Guid
    {
        return $this->territoryID;
    }

    public function withTerritoryID(Guid $territoryID): static
    {
        $new = clone $this;
        $new->territoryID = $territoryID;

        return $new;
    }

    public function getCommand(): int
    {
        return $this->command;
    }

    public function withCommand(int $command): static
    {
        $new = clone $this;
        $new->command = $command;

        return $new;
    }
}
