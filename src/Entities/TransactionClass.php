<?php

namespace LazyTechwork\Parsec\Entities;

/**
 * Класс, используемый для описания категорий событий системы.
 * Каждое событие в системе ParsecNET принадлежит одной или более категорий.
 */
final class TransactionClass extends BaseObject
{
    /**
     * @var int ID категории события системы. Всегда равен 1 поразрядно сдвинутой влево на N позиций, где N принимает значения от 0 до 63. Таким образом каждый категория – это 1 бит в битовой маске события
     */
    private int $id;
    /**
     * @var string Название категории событий системы
     */
    private string $name;
    /**
     * @var bool Признак пользовательской категории
     */
    private bool $isUser;

    /**
     * Класс, используемый для описания категорий событий системы.
     * Каждое событие в системе ParsecNET принадлежит одной или более категорий.
     *
     * @param int    $ID      ID категории события системы. Всегда равен 1 поразрядно сдвинутой влево на N позиций, где N принимает значения от 0 до 63. Таким образом каждый категория – это 1 бит в битовой маске события
     * @param string $NAME    Название категории событий системы
     * @param bool   $IS_USER Признак пользовательской категории
     */
    public function __construct(
        int $ID,
        string $NAME,
        bool $IS_USER
    ) {
        $this->id = $ID;
        $this->name = $NAME;
        $this->isUser = $IS_USER;
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

    public function isUser(): bool
    {
        return $this->isUser;
    }

    public function setIsUser(bool $isUser): self
    {
        $this->isUser = $isUser;

        return $this;
    }
}
