<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class FindVisitorRequest implements RequestInterface
{
    private Guid $sessionID;

    private int $requestNumber;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, int $requestNumber)
    {
        $this->sessionID = $sessionID;
        $this->requestNumber = $requestNumber;
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
