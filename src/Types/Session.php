<?php

namespace LazyTechwork\Parsec\Types;

class Session
{
    private Guid $SessionID;

    private Guid $RootOrgUnitID;

    private Guid $RootTerritoryID;

    public function getSessionID(): Guid
    {
        return $this->SessionID;
    }

    public function withSessionID(Guid $SessionID): static
    {
        $new = clone $this;
        $new->SessionID = $SessionID;

        return $new;
    }

    public function getRootOrgUnitID(): Guid
    {
        return $this->RootOrgUnitID;
    }

    public function withRootOrgUnitID(Guid $RootOrgUnitID): static
    {
        $new = clone $this;
        $new->RootOrgUnitID = $RootOrgUnitID;

        return $new;
    }

    public function getRootTerritoryID(): Guid
    {
        return $this->RootTerritoryID;
    }

    public function withRootTerritoryID(Guid $RootTerritoryID): static
    {
        $new = clone $this;
        $new->RootTerritoryID = $RootTerritoryID;

        return $new;
    }
}
