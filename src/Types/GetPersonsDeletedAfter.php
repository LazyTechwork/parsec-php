<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetPersonsDeletedAfter implements RequestInterface
{
    private Guid $sessionID;

    private \DateTimeInterface $dateFrom;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, \DateTimeInterface $dateFrom)
    {
        $this->sessionID = $sessionID;
        $this->dateFrom = $dateFrom;
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

    public function getDateFrom(): \DateTimeInterface
    {
        return $this->dateFrom;
    }

    public function withDateFrom(\DateTimeInterface $dateFrom): static
    {
        $new = clone $this;
        $new->dateFrom = $dateFrom;

        return $new;
    }
}
