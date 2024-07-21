<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class LicenseRegisterServer implements RequestInterface
{
    private Guid $sessionID;

    private ?string $componentKey = null;

    private ?string $serverID = null;

    private ?string $serverAddress = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?string $componentKey, ?string $serverID, ?string $serverAddress)
    {
        $this->sessionID = $sessionID;
        $this->componentKey = $componentKey;
        $this->serverID = $serverID;
        $this->serverAddress = $serverAddress;
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

    public function getComponentKey(): ?string
    {
        return $this->componentKey;
    }

    public function withComponentKey(?string $componentKey): static
    {
        $new = clone $this;
        $new->componentKey = $componentKey;

        return $new;
    }

    public function getServerID(): ?string
    {
        return $this->serverID;
    }

    public function withServerID(?string $serverID): static
    {
        $new = clone $this;
        $new->serverID = $serverID;

        return $new;
    }

    public function getServerAddress(): ?string
    {
        return $this->serverAddress;
    }

    public function withServerAddress(?string $serverAddress): static
    {
        $new = clone $this;
        $new->serverAddress = $serverAddress;

        return $new;
    }
}
