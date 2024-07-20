<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\Enums\IdentifierType;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания группы доступа.
 */
final class AccessGroup extends BaseObject
{
    /**
     * @var UuidInterface Уникальный ключ группы доступа
     */
    private UuidInterface $id;
    /**
     * @var string Название группы доступа
     */
    private string $name;
    /**
     * @var IdentifierType|int Тип группы доступа
     */
    private IdentifierType|int $identifierType;

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function setId(UuidInterface $id): AccessGroup
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): AccessGroup
    {
        $this->name = $name;

        return $this;
    }

    public function getIdentifierType(): IdentifierType|int
    {
        return $this->identifierType;
    }

    public function setIdentifierType(IdentifierType|int $identifierType): AccessGroup
    {
        $this->identifierType = $identifierType;

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
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'ID' => 'id',
        'NAME' => 'name',
        'IDENTIFTYPE' => 'identifierType',
    ];
}
