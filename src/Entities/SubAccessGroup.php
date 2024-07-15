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

    /**
     * Класс, используемый для описания подгруппы доступа.
     *
     * @param UuidInterface   $SubGroupID  Уникальный ключ группы
     * @param UuidInterface   $ScheduleID  Уникальный ключ расписания
     * @param UuidInterface[] $Territories Массив ключей территорий
     */
    public function __construct(
        UuidInterface $SubGroupID,
        UuidInterface $ScheduleID,
        array $Territories
    ) {
        $this->id = $SubGroupID;
        $this->scheduleId = $ScheduleID;
        $this->territories = $Territories;
    }

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
}
