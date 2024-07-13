<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\Entities\BaseObject;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания дополнительных свойств идентификатора
 */
final class IdentifierExData extends BaseObject
{
    /**
     * @var UuidInterface Уникальный ключ роли группового прохода
     */
    private UuidInterface $passageRoleId;
    /**
     * @var int Максимальное разрешенное количество проходов (значение «-1» - не ограниченное количество проходов; «0» - доступ запрещен; «127» – максимально возможное ограничение)
     */
    private int $entryLimit;
    /**
     * @var UuidInterface Уникальный ключ компонента «Дверь», владельцем которого является идентификатор (используется в функционале «Владелец кабинета»)
     */
    private UuidInterface $ownerComponentId;
    /**
     * Класс, используемый для описания дополнительных свойств идентификатора
     *
     * @param UuidInterface $PASSAGE_ROLE_ID Уникальный ключ роли группового прохода
     * @param int $ENTRY_LIMIT Максимальное разрешенное количество проходов (значение «-1» - не ограниченное количество проходов; «0» - доступ запрещен; «127» – максимально возможное ограничение)
     * @param UuidInterface $OWNED_COMPONENT_ID Уникальный ключ компонента «Дверь», владельцем которого является идентификатор (используется в функционале «Владелец кабинета»)
     */
    public function __construct(
        UuidInterface $PASSAGE_ROLE_ID,
        int $ENTRY_LIMIT,
        UuidInterface $OWNED_COMPONENT_ID
    ) {
        $this->passageRoleId = $PASSAGE_ROLE_ID;
        $this->entryLimit = $ENTRY_LIMIT;
        $this->ownerComponentId = $OWNED_COMPONENT_ID;
    }

    public function getPassageRoleId(): UuidInterface
    {
        return $this->passageRoleId;
    }

    public function setPassageRoleId(UuidInterface $passageRoleId): IdentifierExData
    {
        $this->passageRoleId = $passageRoleId;
        return $this;
    }

    public function getEntryLimit(): int
    {
        return $this->entryLimit;
    }

    public function setEntryLimit(int $entryLimit): IdentifierExData
    {
        $this->entryLimit = $entryLimit;
        return $this;
    }

    public function getOwnerComponentId(): UuidInterface
    {
        return $this->ownerComponentId;
    }

    public function setOwnerComponentId(UuidInterface $ownerComponentId): IdentifierExData
    {
        $this->ownerComponentId = $ownerComponentId;
        return $this;
    }

}
