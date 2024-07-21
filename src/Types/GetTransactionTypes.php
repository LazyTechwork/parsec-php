<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetTransactionTypes implements RequestInterface
{
    private string $sessionID;

    private int $classMask;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, int $classMask)
    {
        $this->sessionID = $sessionID;
        $this->classMask = $classMask;
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

    public function getClassMask(): int
    {
        return $this->classMask;
    }

    public function withClassMask(int $classMask): static
    {
        $new = clone $this;
        $new->classMask = $classMask;

        return $new;
    }
}
