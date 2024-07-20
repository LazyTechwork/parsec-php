<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания идентификатора.
 */
class BaseIdentifier extends BaseObject
{
    /**
     * @var string Код идентификатора (строка, содержащая число в шестнадцатеричном формате, длинной ровно 8 символов)
     */
    protected string $code;
    /**
     * @var UuidInterface Уникальный ключ сотрудника
     */
    protected UuidInterface $personId;
    /**
     * @var bool Признак, является ли идентификатор первичным
     */
    protected bool $isPrimary;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(#[\SensitiveParameter] string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getPersonId(): UuidInterface
    {
        return $this->personId;
    }

    public function setPersonId(UuidInterface $personId): static
    {
        $this->personId = $personId;

        return $this;
    }

    public function isPrimary(): bool
    {
        return $this->isPrimary;
    }

    public function setIsPrimary(bool $isPrimary): static
    {
        $this->isPrimary = $isPrimary;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'CODE' => 'string',
            'PERSON_ID' => 'guid',
            'IS_PRIMARY' => 'bool',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'CODE' => 'code',
        'PERSON_ID' => 'personId',
        'IS_PRIMARY' => 'isPrimary',
    ];
}
