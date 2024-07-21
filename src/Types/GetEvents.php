<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetEvents implements RequestInterface
{
    private Guid $sessionID;

    private Guid $TerritoryID;

    private Guid $PersNodeID;

    private \DateTimeInterface $dtFrom;

    private \DateTimeInterface $dtTo;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $TerritoryID, Guid $PersNodeID, \DateTimeInterface $dtFrom, \DateTimeInterface $dtTo)
    {
        $this->sessionID = $sessionID;
        $this->TerritoryID = $TerritoryID;
        $this->PersNodeID = $PersNodeID;
        $this->dtFrom = $dtFrom;
        $this->dtTo = $dtTo;
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

    public function getTerritoryID(): Guid
    {
        return $this->TerritoryID;
    }

    public function withTerritoryID(Guid $TerritoryID): static
    {
        $new = clone $this;
        $new->TerritoryID = $TerritoryID;

        return $new;
    }

    public function getPersNodeID(): Guid
    {
        return $this->PersNodeID;
    }

    public function withPersNodeID(Guid $PersNodeID): static
    {
        $new = clone $this;
        $new->PersNodeID = $PersNodeID;

        return $new;
    }

    public function getDtFrom(): \DateTimeInterface
    {
        return $this->dtFrom;
    }

    public function withDtFrom(\DateTimeInterface $dtFrom): static
    {
        $new = clone $this;
        $new->dtFrom = $dtFrom;

        return $new;
    }

    public function getDtTo(): \DateTimeInterface
    {
        return $this->dtTo;
    }

    public function withDtTo(\DateTimeInterface $dtTo): static
    {
        $new = clone $this;
        $new->dtTo = $dtTo;

        return $new;
    }
}
