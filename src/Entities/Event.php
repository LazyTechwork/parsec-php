<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\Enums\EventType;

/**
 * Класс, используемый для описания события системы.
 */
final class Event extends BaseObject
{
    /**
     * @var \DateTimeInterface Дата события
     */
    private \DateTimeInterface $date;
    /**
     * @var EventType Тип события
     */
    private EventType $type;
    /**
     * @var int Индекс сотрудника в EventsHistory
     */
    private int $personIndex;
    /**
     * @var string Код идентификатора
     */
    private string $identifierCode;
    /**
     * @var int Индекс территории в EventsHistory
     */
    private int $territoryIndex;

    /**
     * Класс, используемый для описания события системы.
     *
     * @param \DateTimeInterface $EventDate           Дата события
     * @param EventType          $EventType           Тип события
     * @param int                $EventPersonIndex    Индекс сотрудника в EventsHistory
     * @param string             $CODE                Код идентификатора
     * @param int                $EventTerritoryIndex Индекс территории в EventsHistory
     */
    public function __construct(
        \DateTimeInterface $EventDate,
        EventType $EventType,
        int $EventPersonIndex,
        string $CODE,
        int $EventTerritoryIndex
    ) {
        $this->date = $EventDate;
        $this->type = $EventType;
        $this->personIndex = $EventPersonIndex;
        $this->identifierCode = $CODE;
        $this->territoryIndex = $EventTerritoryIndex;
    }

    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getType(): selfType
    {
        return $this->type;
    }

    public function setType(EventType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPersonIndex(): int
    {
        return $this->personIndex;
    }

    public function setPersonIndex(int $personIndex): self
    {
        $this->personIndex = $personIndex;

        return $this;
    }

    public function getIdentifierCode(): string
    {
        return $this->identifierCode;
    }

    public function setIdentifierCode(string $identifierCode): self
    {
        $this->identifierCode = $identifierCode;

        return $this;
    }

    public function getTerritoryIndex(): int
    {
        return $this->territoryIndex;
    }

    public function setTerritoryIndex(int $territoryIndex): self
    {
        $this->territoryIndex = $territoryIndex;

        return $this;
    }
}
