<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetEvents implements RequestInterface
{
    private string $sessionID;

    private string $TerritoryID;

    private string $PersNodeID;

    private \DateTimeInterface $dtFrom;

    private \DateTimeInterface $dtTo;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $TerritoryID, string $PersNodeID, \DateTimeInterface $dtFrom, \DateTimeInterface $dtTo)
    {
        $this->sessionID = $sessionID;
        $this->TerritoryID = $TerritoryID;
        $this->PersNodeID = $PersNodeID;
        $this->dtFrom = $dtFrom;
        $this->dtTo = $dtTo;
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

    public function getTerritoryID(): string
    {
        return $this->TerritoryID;
    }

    public function withTerritoryID(string $TerritoryID): static
    {
        $new = clone $this;
        $new->TerritoryID = $TerritoryID;

        return $new;
    }

    public function getPersNodeID(): string
    {
        return $this->PersNodeID;
    }

    public function withPersNodeID(string $PersNodeID): static
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
