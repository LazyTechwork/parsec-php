<?php

namespace LazyTechwork\Parsec\Types;

class Event extends BaseObject
{
    private \DateTimeInterface $EventDate;

    private int $EventType;

    private int $EventPersonIndex;

    private ?string $CODE = null;

    private int $EventTerritoryIndex;

    public function getEventDate(): \DateTimeInterface
    {
        return $this->EventDate;
    }

    public function withEventDate(\DateTimeInterface $EventDate): static
    {
        $new = clone $this;
        $new->EventDate = $EventDate;

        return $new;
    }

    public function getEventType(): int
    {
        return $this->EventType;
    }

    public function withEventType(int $EventType): static
    {
        $new = clone $this;
        $new->EventType = $EventType;

        return $new;
    }

    public function getEventPersonIndex(): int
    {
        return $this->EventPersonIndex;
    }

    public function withEventPersonIndex(int $EventPersonIndex): static
    {
        $new = clone $this;
        $new->EventPersonIndex = $EventPersonIndex;

        return $new;
    }

    public function getCODE(): ?string
    {
        return $this->CODE;
    }

    public function withCODE(?string $CODE): static
    {
        $new = clone $this;
        $new->CODE = $CODE;

        return $new;
    }

    public function getEventTerritoryIndex(): int
    {
        return $this->EventTerritoryIndex;
    }

    public function withEventTerritoryIndex(int $EventTerritoryIndex): static
    {
        $new = clone $this;
        $new->EventTerritoryIndex = $EventTerritoryIndex;

        return $new;
    }
}
