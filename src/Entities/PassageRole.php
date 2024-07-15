<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания роли группового прохода.
 */
final class PassageRole extends BaseObject
{
    /**
     * @var UuidInterface Уникальный ключ роли
     */
    private UuidInterface $id;
    /**
     * @var string Название роли
     */
    private string $name;
    /**
     * @var string Описание роли
     */
    private string $description;

    /**
     * Класс, используемый для описания роли группового прохода.
     *
     * @param UuidInterface $ID          Уникальный ключ роли
     * @param string        $NAME        Название роли
     * @param string        $DESCRIPTION Описание роли
     */
    public function __construct(
        UuidInterface $ID,
        string $NAME,
        string $DESCRIPTION
    ) {
        $this->id = $ID;
        $this->name = $NAME;
        $this->description = $DESCRIPTION;
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
