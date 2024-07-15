<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

class BaseOrgUnit extends BaseObject
{
    /**
     * @var UuidInterface Уникальный ключ подразделения
     */
    protected UuidInterface $id;
    /**
     * @var string Название подразделения
     */
    protected string $name;
    /**
     * @var string Описание подразделения
     */
    protected string $description;

    /**
     * Класс, используемый для описания подразделения.
     *
     * @param UuidInterface $ID   Уникальный ключ подразделения
     * @param string        $NAME Название подразделения
     * @param string        $DESC Описание подразделения
     */
    public function __construct(UuidInterface $ID, string $NAME, string $DESC)
    {
        $this->id = $ID;
        $this->name = $NAME;
        $this->description = $DESC;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function setId(UuidInterface $id): static
    {
        $this->id = $id;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
