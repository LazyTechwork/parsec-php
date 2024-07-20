<?php

namespace LazyTechwork\Parsec\Entities;

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

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'NAME' => 'string',
            'DESCRIPTION' => 'string',
            'VISITOR_CONTROL' => 'bool',
            'IS_SYSTEM' => 'bool',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'NAME' => 'name',
        'DESCRIPTION' => 'description',
        'VISITOR_CONTROL' => 'visitorControl',
        'IS_SYSTEM' => 'isSystem',
    ];
}
