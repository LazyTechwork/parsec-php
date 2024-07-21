<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetTransactionTypes implements RequestInterface
{
    private Guid $sessionID;

    private int $classMask;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, int $classMask)
    {
        $this->sessionID = $sessionID;
        $this->classMask = $classMask;
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
