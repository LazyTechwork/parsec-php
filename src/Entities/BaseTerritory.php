<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\TerritoryType;
use Ramsey\Uuid\UuidInterface;

/**
 * Базовый класс, используемый для описания территории.
 */
class BaseTerritory
{
    /**
     * @var UuidInterface Уникальный ключ территории
     */
    protected UuidInterface $id;
    /**
     * @var TerritoryType|int Тип объекта территории
     */
    protected TerritoryType|int $type;
    /**
     * @var string Название территории
     */
    protected string $name;
    /**
     * @var string Описание территории
     */
    protected string $description;

    /**
     * Базовый класс, используемый для описания территории.
     *
     * @param UuidInterface     $ID   Уникальный ключ территории
     * @param TerritoryType|int $TYPE Тип объекта территории
     * @param string            $NAME Название территории
     * @param string            $DESC Описание территории
     */
    public function __construct(
        UuidInterface $ID,
        TerritoryType|int $TYPE,
        string $NAME,
        string $DESC
    ) {
        $this->id = $ID;
        $this->type = $TYPE;
        $this->name = $NAME;
        $this->description = $DESC;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function setId(UuidInterface $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): TerritoryType|int
    {
        return $this->type;
    }

    public function setType(TerritoryType|int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
