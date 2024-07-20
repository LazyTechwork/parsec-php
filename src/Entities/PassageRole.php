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

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'ID' => 'guid',
            'NAME' => 'string',
            'DESCRIPTION' => 'string',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'ID' => 'id',
        'NAME' => 'name',
        'DESCRIPTION' => 'description',
    ];
}
