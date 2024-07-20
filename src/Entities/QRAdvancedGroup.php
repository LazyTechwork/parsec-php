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

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'ID' => 'int',
            'name' => 'string',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'ID' => 'id',
        'name' => 'name',
    ];
}
