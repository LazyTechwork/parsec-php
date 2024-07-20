<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\Enums\TerritoryType;
use Ramsey\Uuid\UuidInterface;

/**
 * Базовый класс, используемый для описания территории.
 */
class BaseTerritory extends BaseObject
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

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'ID' => 'guid',
            'NAME' => 'string',
            'DESC' => 'string',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'ID' => 'id',
        'TYPE' => 'type',
        'NAME' => 'name',
        'DESC' => 'description',
    ];
}
