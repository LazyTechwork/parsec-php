<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания событий системы.
 */
final class EventsHistory extends BaseObject
{
    /**
     * @var Event[]
     */
    private array $events;
    /**
     * @var UuidInterface[]
     */
    private array $persons;
    /**
     * @var string[]
     */
    private array $personNames;
    /**
     * @var UuidInterface[]
     */
    private array $territories;
    /**
     * @var string[]
     */
    private array $territoryNames;

    public function getEvents(): array
    {
        return $this->events;
    }

    public function setEvents(array $events): EventsHistory
    {
        $this->events = $events;

        return $this;
    }

    public function getPersons(): array
    {
        return $this->persons;
    }

    public function setPersons(array $persons): EventsHistory
    {
        $this->persons = $persons;

        return $this;
    }

    public function getPersonNames(): array
    {
        return $this->personNames;
    }

    public function setPersonNames(array $personNames): EventsHistory
    {
        $this->personNames = $personNames;

        return $this;
    }

    public function getTerritories(): array
    {
        return $this->territories;
    }

    public function setTerritories(array $territories): EventsHistory
    {
        $this->territories = $territories;

        return $this;
    }

    public function getTerritoryNames(): array
    {
        return $this->territoryNames;
    }

    public function setTerritoryNames(array $territoryNames): EventsHistory
    {
        $this->territoryNames = $territoryNames;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'Events' => 'array',
            'Persons' => 'array',
            'PersonFullNames' => 'array',
            'Territories' => 'array',
            'TerritoryNames' => 'array',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'Events' => 'events',
        'Persons' => 'persons',
        'PersonFullNames' => 'personNames',
        'Territories' => 'territories',
        'TerritoryNames' => 'territoryNames',
    ];
}
