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
            'DESC' => 'string',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'ID' => 'id',
        'NAME' => 'name',
        'DESC' => 'description',
    ];
}
