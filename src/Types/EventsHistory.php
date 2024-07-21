<?php

namespace LazyTechwork\Parsec\Types;

class EventsHistory
{
    private ?ArrayOfEvent $Events = null;

    private ?ArrayOfGuid $Persons = null;

    private ?ArrayOfString $PersonFullNames = null;

    private ?ArrayOfGuid $Territories = null;

    private ?ArrayOfString $TerritoryNames = null;

    public function getEvents(): ?ArrayOfEvent
    {
        return $this->Events;
    }

    public function withEvents(?ArrayOfEvent $Events): static
    {
        $new = clone $this;
        $new->Events = $Events;

        return $new;
    }

    public function getPersons(): ?ArrayOfGuid
    {
        return $this->Persons;
    }

    public function withPersons(?ArrayOfGuid $Persons): static
    {
        $new = clone $this;
        $new->Persons = $Persons;

        return $new;
    }

    public function getPersonFullNames(): ?ArrayOfString
    {
        return $this->PersonFullNames;
    }

    public function withPersonFullNames(?ArrayOfString $PersonFullNames): static
    {
        $new = clone $this;
        $new->PersonFullNames = $PersonFullNames;

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

    public function getTerritoryNames(): ?ArrayOfString
    {
        return $this->TerritoryNames;
    }

    public function withTerritoryNames(?ArrayOfString $TerritoryNames): static
    {
        $new = clone $this;
        $new->TerritoryNames = $TerritoryNames;

        return $new;
    }
}
