<?php

namespace LazyTechwork\Parsec\Types;

class SubAccessGroup extends BaseObject
{
    private Guid $SubGroupID;

    private Guid $ScheduleID;

    private ?ArrayOfGuid $Territories = null;

    public function getSubGroupID(): Guid
    {
        return $this->SubGroupID;
    }

    public function withSubGroupID(Guid $SubGroupID): static
    {
        $new = clone $this;
        $new->SubGroupID = $SubGroupID;

        return $new;
    }

    public function getScheduleID(): Guid
    {
        return $this->ScheduleID;
    }

    public function withScheduleID(Guid $ScheduleID): static
    {
        $new = clone $this;
        $new->ScheduleID = $ScheduleID;

        return $new;
    }

    public function getTerritories(): ?ArrayOfGuid
    {
        return $this->Territories;
    }

    public function withTerritories(?ArrayOfGuid $Territories): static
    {
        $new = clone $this;
        $new->Territories = $Territories;

        return $new;
    }
}
