<?php

namespace LazyTechwork\Parsec\Entities;

use JetBrains\PhpStorm\Deprecated;

/**
 * Класс, используемый для описания организации.
 */
final class Domain extends BaseObject
{
    /**
     * @var string Наименование организации
     */
    private string $name;
    /**
     * @var string Описание организации
     */
    private string $description;
    /**
     * @var bool Признак Бюро Пропусков (не используется начиная с версии 3.2)
     */
    private bool $visitorControl;
    /**
     * @var bool Признак организации SYSTEM
     */
    private bool $isSystem;

    /**
     * Класс, используемый для описания организации.
     *
     * @param string $NAME            Наименование организации
     * @param string $DESCRIPTION     Описание организации
     * @param bool   $VISITOR_CONTROL Признак Бюро Пропусков (не используется начиная с версии 3.2)
     * @param bool   $IS_SYSTEM       Признак организации SYSTEM
     */
    public function __construct(
        string $NAME,
        string $DESCRIPTION,
        #[Deprecated] bool $VISITOR_CONTROL,
        bool $IS_SYSTEM
    ) {
        $this->name = $NAME;
        $this->description = $DESCRIPTION;
        $this->visitorControl = $VISITOR_CONTROL;
        $this->isSystem = $IS_SYSTEM;
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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function isVisitorControl(): bool
    {
        return $this->visitorControl;
    }

    public function setVisitorControl(bool $visitorControl): self
    {
        $this->visitorControl = $visitorControl;

        return $this;
    }

    public function isSystem(): bool
    {
        return $this->isSystem;
    }

    public function setIsSystem(bool $isSystem): self
    {
        $this->isSystem = $isSystem;

        return $this;
    }
}
