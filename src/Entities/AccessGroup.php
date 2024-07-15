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

    /**
     * Класс, используемый для описания группы доступа.
     *
     * @param UuidInterface      $ID          Уникальный ключ группы доступа
     * @param string             $NAME        Название группы доступа
     * @param IdentifierType|int $IDENTIFTYPE Тип группы доступа
     */
    public function __construct(
        UuidInterface $ID,
        string $NAME,
        IdentifierType|int $IDENTIFTYPE,
    ) {
        $this->id = $ID;
        $this->name = $NAME;
        $this->identifierType = $IDENTIFTYPE;
    }

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
}
