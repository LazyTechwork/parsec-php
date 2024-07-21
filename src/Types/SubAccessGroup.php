<?php

namespace LazyTechwork\Parsec\Types;

class SubAccessGroup extends BaseObject
{
    private string $SubGroupID;

    private string $ScheduleID;

    private ?ArrayOfGuid $Territories = null;

    public function getSubGroupID(): string
    {
        return $this->SubGroupID;
    }

    public function withSubGroupID(string $SubGroupID): static
    {
        $new = clone $this;
        $new->SubGroupID = $SubGroupID;

        return $new;
    }

    public function getScheduleID(): string
    {
        return $this->ScheduleID;
    }

    public function withScheduleID(string $ScheduleID): static
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
