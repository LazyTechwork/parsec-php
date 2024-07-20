<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания подгруппы доступа.
 */
final class SubAccessGroup extends BaseObject
{
    /**
     * @var UuidInterface Уникальный ключ группы
     */
    private UuidInterface $id;
    /**
     * @var UuidInterface Уникальный ключ расписания
     */
    private UuidInterface $scheduleId;
    /**
     * @var UuidInterface[] Массив ключей территорий
     */
    private array $territories;

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function setId(UuidInterface $id): SubAccessGroup
    {
        $this->id = $id;

        return $this;
    }

    public function getScheduleId(): UuidInterface
    {
        return $this->scheduleId;
    }

    public function setScheduleId(UuidInterface $scheduleId): SubAccessGroup
    {
        $this->scheduleId = $scheduleId;

        return $this;
    }

    public function getTerritories(): array
    {
        return $this->territories;
    }

    public function setTerritories(array $territories): SubAccessGroup
    {
        $this->territories = $territories;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'SubGroupID' => 'guid',
            'ScheduleID' => 'guid',
            'Territories' => 'array',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'SubGroupID' => 'id',
        'ScheduleID' => 'scheduleId',
        'Territories' => 'territories',
    ];
}
