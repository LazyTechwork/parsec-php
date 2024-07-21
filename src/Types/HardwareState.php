<?php

namespace LazyTechwork\Parsec\Types;

class HardwareState extends BaseObject
{
    private string $TerritoryID;

    private int $State;

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

    public function getState(): int
    {
        return $this->State;
    }

    public function withState(int $State): static
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }
}
