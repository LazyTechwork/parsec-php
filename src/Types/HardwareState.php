<?php

namespace LazyTechwork\Parsec\Types;

class HardwareState extends BaseObject
{
    private Guid $TerritoryID;

    private int $State;

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
