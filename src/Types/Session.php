<?php

namespace LazyTechwork\Parsec\Types;

class Session
{
    private string $SessionID;

    private string $RootOrgUnitID;

    private string $RootTerritoryID;

    public function getSessionID(): string
    {
        return $this->SessionID;
    }

    public function withSessionID(string $SessionID): static
    {
        $new = clone $this;
        $new->SessionID = $SessionID;

        return $new;
    }

    public function getRootOrgUnitID(): string
    {
        return $this->RootOrgUnitID;
    }

    public function withRootOrgUnitID(string $RootOrgUnitID): static
    {
        $new = clone $this;
        $new->RootOrgUnitID = $RootOrgUnitID;

        return $new;
    }

    public function getRootTerritoryID(): string
    {
        return $this->RootTerritoryID;
    }

    public function withRootTerritoryID(string $RootTerritoryID): static
    {
        $new = clone $this;
        $new->RootTerritoryID = $RootTerritoryID;

        return $new;
    }
}
