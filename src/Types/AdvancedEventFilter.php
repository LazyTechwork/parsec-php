<?php

namespace LazyTechwork\Parsec\Types;

class AdvancedEventFilter extends EventFilter
{
    private ?ArrayOfGuid $Territories = null;

    private ?ArrayOfGuid $Organizations = null;

    private ?ArrayOfGuid $Users = null;

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

    public function getOrganizations(): ?ArrayOfGuid
    {
        return $this->Organizations;
    }

    public function withOrganizations(?ArrayOfGuid $Organizations): static
    {
        $new = clone $this;
        $new->Organizations = $Organizations;

        return $new;
    }

    public function getUsers(): ?ArrayOfGuid
    {
        return $this->Users;
    }

    public function withUsers(?ArrayOfGuid $Users): static
    {
        $new = clone $this;
        $new->Users = $Users;

        return $new;
    }
}
