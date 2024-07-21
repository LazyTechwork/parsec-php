<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class LicenseGetComponent implements RequestInterface
{
    private string $sessionID;

    private ?string $componentKey = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?string $componentKey)
    {
        $this->sessionID = $sessionID;
        $this->componentKey = $componentKey;
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
}
