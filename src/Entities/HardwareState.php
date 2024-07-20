<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания состояния территории.
 */
final class HardwareState extends BaseObject
{
    /**
     * @var UuidInterface Уникальный ключ территории
     */
    private UuidInterface $territoryId;
    /**
     * @var int Набор состояний территории – битовая маска размером 4 байта
     */
    private int $state;

    public function getTerritoryId(): UuidInterface
    {
        return $this->territoryId;
    }

    public function setTerritoryId(UuidInterface $territoryId): static
    {
        $this->territoryId = $territoryId;

        return $this;
    }

    public function getState(): int
    {
        return $this->state;
    }

    public function setState(int $state): static
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'TerritoryID' => 'guid',
            'State' => 'int',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'TerritoryID' => 'territoryId',
        'State' => 'state',
    ];
}
