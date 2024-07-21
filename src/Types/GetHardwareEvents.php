<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetHardwareEvents implements RequestInterface
{
    private string $sessionID;

    private int $fromIndex;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, int $fromIndex)
    {
        $this->sessionID = $sessionID;
        $this->fromIndex = $fromIndex;
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

    public function getFromIndex(): int
    {
        return $this->fromIndex;
    }

    public function withFromIndex(int $fromIndex): static
    {
        $new = clone $this;
        $new->fromIndex = $fromIndex;

        return $new;
    }
}
