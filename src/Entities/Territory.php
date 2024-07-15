<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\TerritoryType;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания территории.
 */
class Territory extends BaseTerritory
{
    protected UuidInterface $parentId;

    /**
     * Класс, используемый для описания территории.
     *
     * @param UuidInterface     $ID        Уникальный ключ территории
     * @param TerritoryType|int $TYPE      Тип объекта территории
     * @param string            $NAME      Название территории
     * @param string            $DESC      Описание территории
     * @param UuidInterface     $PARENT_ID Уникальный ключ родительской территории
     */
    public function __construct(UuidInterface $ID, TerritoryType|int $TYPE, string $NAME, string $DESC, UuidInterface $PARENT_ID)
    {
        parent::__construct($ID, $TYPE, $NAME, $DESC);
        $this->parentId = $PARENT_ID;
    }

    public function getParentId(): UuidInterface
    {
        return $this->parentId;
    }

    public function setParentId(UuidInterface $parentId): static
    {
        $this->parentId = $parentId;

        return $this;
    }
}
