<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания дополнительных свойств идентификатора.
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

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'PASSAGE_ROLE_ID' => 'guid',
            'ENTRY_LIMIT' => 'int',
            'OWNED_COMPONENT_ID' => 'guid',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'PASSAGE_ROLE_ID' => 'passageRoleId',
        'ENTRY_LIMIT' => 'entryLimit',
        'OWNED_COMPONENT_ID' => 'ownerComponentId',
    ];
}
