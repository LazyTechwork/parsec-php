<?php

namespace LazyTechwork\Parsec\Types;

class QRAdvancedData extends BaseObject
{
    private \DateTimeInterface $DateFrom;

    private \DateTimeInterface $DateTo;

    private ?\DateTimeInterface $TimeFrom = null;

    private ?\DateTimeInterface $TimeTo = null;

    private ?ArrayOfShort $Groups = null;

    private int $CardID;

    public function getDateFrom(): \DateTimeInterface
    {
        return $this->DateFrom;
    }

    public function withDateFrom(\DateTimeInterface $DateFrom): static
    {
        $new = clone $this;
        $new->DateFrom = $DateFrom;

        return $new;
    }

    public function getDateTo(): \DateTimeInterface
    {
        return $this->DateTo;
    }

    public function withDateTo(\DateTimeInterface $DateTo): static
    {
        $new = clone $this;
        $new->DateTo = $DateTo;

        return $new;
    }

    public function getTimeFrom(): ?\DateTimeInterface
    {
        return $this->TimeFrom;
    }

    public function withTimeFrom(?\DateTimeInterface $TimeFrom): static
    {
        $new = clone $this;
        $new->TimeFrom = $TimeFrom;

        return $new;
    }

    public function getTimeTo(): ?\DateTimeInterface
    {
        return $this->TimeTo;
    }

    public function withTimeTo(?\DateTimeInterface $TimeTo): static
    {
        $new = clone $this;
        $new->TimeTo = $TimeTo;

        return $new;
    }

    public function getGroups(): ?ArrayOfShort
    {
        return $this->Groups;
    }

    public function withGroups(?ArrayOfShort $Groups): static
    {
        $new = clone $this;
        $new->Groups = $Groups;

        return $new;
    }

    public function getCardID(): int
    {
        return $this->CardID;
    }

    public function withCardID(int $CardID): static
    {
        $new = clone $this;
        $new->CardID = $CardID;

        return $new;
    }
}
