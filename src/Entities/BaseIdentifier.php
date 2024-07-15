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

    /**
     * Класс, используемый для описания идентификатора.
     *
     * @param string        $CODE       Код идентификатора (строка, содержащая число в шестнадцатеричном формате, длинной ровно 8 символов)
     * @param UuidInterface $PERSON_ID  Уникальный ключ сотрудника
     * @param bool          $IS_PRIMARY Признак, является ли идентификатор первичным
     */
    public function __construct(#[\SensitiveParameter] string $CODE, UuidInterface $PERSON_ID, bool $IS_PRIMARY)
    {
        $this->code = $CODE;
        $this->personId = $PERSON_ID;
        $this->isPrimary = $IS_PRIMARY;
    }

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
}
