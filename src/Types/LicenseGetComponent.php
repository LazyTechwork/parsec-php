<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class LicenseGetComponent implements RequestInterface
{
    private Guid $sessionID;

    private ?string $componentKey = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?string $componentKey)
    {
        $this->sessionID = $sessionID;
        $this->componentKey = $componentKey;
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
}
