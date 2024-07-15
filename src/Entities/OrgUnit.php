<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

final class OrgUnit extends BaseOrgUnit
{
    /**
     * @var UuidInterface Уникальный ключ родительского подразделения
     */
    private UuidInterface $parentId;

    /**
     * Класс, используемый для описания подразделения.
     *
     * @param UuidInterface $ID        Уникальный ключ подразделения
     * @param string        $NAME      Название подразделения
     * @param string        $DESC      Описание подразделения
     * @param UuidInterface $PARENT_ID Уникальный ключ родительского подразделения
     */
    public function __construct(UuidInterface $ID, string $NAME, string $DESC, UuidInterface $PARENT_ID)
    {
        parent::__construct($ID, $NAME, $DESC);
        $this->parentId = $PARENT_ID;
    }

    public function getParentId(): UuidInterface
    {
        return $this->parentId;
    }

    public function setParentId(UuidInterface $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }
}
