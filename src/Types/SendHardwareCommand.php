<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SendHardwareCommand implements RequestInterface
{
    private string $sessionID;

    private string $territoryID;

    private int $command;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $territoryID, int $command)
    {
        $this->sessionID = $sessionID;
        $this->territoryID = $territoryID;
        $this->command = $command;
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

    public function getTerritoryID(): string
    {
        return $this->territoryID;
    }

    public function withTerritoryID(string $territoryID): static
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
