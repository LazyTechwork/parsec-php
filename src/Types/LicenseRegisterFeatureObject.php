<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class LicenseRegisterFeatureObject implements RequestInterface
{
    private string $sessionID;

    private ?string $componentKey = null;

    private ?string $serverID = null;

    private string $featureID;

    /**
     * @var mixed|null
     */
    private mixed $value = null;

    /**
     * Constructor.
     *
     * @param mixed|null $value
     */
    public function __construct(string $sessionID, ?string $componentKey, ?string $serverID, string $featureID, mixed $value)
    {
        $this->sessionID = $sessionID;
        $this->componentKey = $componentKey;
        $this->serverID = $serverID;
        $this->featureID = $featureID;
        $this->value = $value;
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

    public function getFeatureID(): string
    {
        return $this->featureID;
    }

    public function withFeatureID(string $featureID): static
    {
        $new = clone $this;
        $new->featureID = $featureID;

        return $new;
    }

    /**
     * @return mixed|null
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * @param mixed|null $value
     */
    public function withValue(mixed $value): static
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }
}
