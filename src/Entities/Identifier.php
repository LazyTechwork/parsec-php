<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\Enums\IdentifierType;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания идентификатора.
 */
class Identifier extends BaseIdentifier
{
    /**
     * @var UuidInterface Уникальный ключ группы доступа идентификатора
     */
    protected UuidInterface $accessGroupId;
    /**
     * @var int Маска привилегий
     */
    protected int $privilegeMask;
    /**
     * @var IdentifierType|int Тип идентификатора
     */
    protected IdentifierType|int $type;
    /**
     * @var string Наименование идентификатора (используется в информационных целях)
     */
    protected string $name;

    public function getAccessGroupId(): UuidInterface
    {
        return $this->accessGroupId;
    }

    public function setAccessGroupId(UuidInterface $accessGroupId): static
    {
        $this->accessGroupId = $accessGroupId;

        return $this;
    }

    public function getPrivilegeMask(): int
    {
        return $this->privilegeMask;
    }

    public function setPrivilegeMask(int $privilegeMask): static
    {
        $this->privilegeMask = $privilegeMask;

        return $this;
    }

    public function getType(): IdentifierType|int
    {
        return $this->type;
    }

    public function setType(IdentifierType|int $type): static
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

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'CODE' => 'string',
            'PERSON_ID' => 'guid',
            'IS_PRIMARY' => 'bool',
            'ACCGROUP_ID' => 'guid',
            'PRIVILEGE_MASK' => 'int',
            'NAME' => 'string',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'ACCGROUP_ID' => 'accessGroupId',
        'PRIVILEGE_MASK' => 'privilegeMask',
        'IDENTIFTYPE' => 'type',
        'NAME' => 'name',
    ];
}
