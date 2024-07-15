<?php

namespace LazyTechwork\Parsec\Entities;

/**
 * Класс, используемый для описания группы контроллеров расширенных QR-кодов.
 */
final class QRAdvancedGroup extends BaseObject
{
    /**
     * @var int Идентификатор группы контроллеров
     */
    private int $id;
    /**
     * @var string Название группы
     */
    private string $name;

    /**
     * Класс, используемый для описания группы контроллеров расширенных QR-кодов.
     *
     * @param int    $ID   Идентификатор группы контроллеров
     * @param string $name Название группы
     */
    public function __construct(
        int $ID,
        string $name
    ) {
        $this->id = $ID;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
