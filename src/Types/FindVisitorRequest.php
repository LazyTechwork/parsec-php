<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class FindVisitorRequest implements RequestInterface
{
    private string $sessionID;

    private int $requestNumber;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, int $requestNumber)
    {
        $this->sessionID = $sessionID;
        $this->requestNumber = $requestNumber;
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

    public function getRequestNumber(): int
    {
        return $this->requestNumber;
    }

    public function withRequestNumber(int $requestNumber): static
    {
        $new = clone $this;
        $new->requestNumber = $requestNumber;

        return $new;
    }
}
