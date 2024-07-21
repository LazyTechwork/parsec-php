<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetLicenseDongleInfo implements RequestInterface
{
    private Guid $sessionID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID)
    {
        $this->sessionID = $sessionID;
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
}
