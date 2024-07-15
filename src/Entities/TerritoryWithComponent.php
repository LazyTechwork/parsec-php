<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\Enums\TerritoryType;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания территории c информацией о связанном с ней компоненте.
 */
class TerritoryWithComponent extends Territory
{
    /**
     * @var UuidInterface Уникальный ключ компонента
     */
    protected UuidInterface $componentId;
    /**
     * @var int Битовая маска свойств компонента
     */
    protected int $featureMask;

    /**
     * Класс, используемый для описания территории c информацией о связанном с ней компоненте.
     *
     * @param UuidInterface     $ID           Уникальный ключ территории
     * @param TerritoryType|int $TYPE         Тип объекта территории
     * @param string            $NAME         Название территории
     * @param string            $DESC         Описание территории
     * @param UuidInterface     $PARENT_ID    Уникальный ключ родительской территории
     * @param UuidInterface     $COMPONENT_ID Уникальный ключ компонента
     * @param int               $FEATURE_MASK Битовая маска свойств компонента
     */
    public function __construct(UuidInterface $ID, TerritoryType|int $TYPE, string $NAME, string $DESC, UuidInterface $PARENT_ID, UuidInterface $COMPONENT_ID, int $FEATURE_MASK)
    {
        parent::__construct($ID, $TYPE, $NAME, $DESC, $PARENT_ID);
        $this->componentId = $COMPONENT_ID;
        $this->featureMask = $FEATURE_MASK;
    }

    public function getComponentId(): UuidInterface
    {
        return $this->componentId;
    }

    public function setComponentId(UuidInterface $componentId): TerritoryWithComponent
    {
        $this->componentId = $componentId;

        return $this;
    }

    public function getFeatureMask(): int
    {
        return $this->featureMask;
    }

    public function setFeatureMask(int $featureMask): TerritoryWithComponent
    {
        $this->featureMask = $featureMask;

        return $this;
    }
}
