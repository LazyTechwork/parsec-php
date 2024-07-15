<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\IdentifierType;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания временного идентификатора.
 */
class IdentifierTemp extends Identifier
{
    protected \DateTimeInterface $validFrom;
    protected \DateTimeInterface $validTo;

    /**
     * Класс, используемый для описания временного идентификатора.
     *
     * @param string             $CODE           Код идентификатора (строка, содержащая число в шестнадцатеричном формате, длинной ровно 8 символов)
     * @param UuidInterface      $PERSON_ID      Уникальный ключ сотрудника
     * @param bool               $IS_PRIMARY     Признак, является ли идентификатор первичным
     * @param UuidInterface      $ACCGROUP_ID    Уникальный ключ группы доступа идентификатора
     * @param int                $PRIVILEGE_MASK Маска привилегий
     * @param IdentifierType|int $IDENTIFTYPE    Тип идентификатора
     * @param string             $NAME           Наименование идентификатора (используется в информационных целях)
     * @param \DateTimeInterface $VALID_FROM     Дата начала действия идентификатора
     * @param \DateTimeInterface $VALID_TO       Дата окончания действия идентификатора
     */
    public function __construct(#[\SensitiveParameter] string $CODE, UuidInterface $PERSON_ID, bool $IS_PRIMARY, UuidInterface $ACCGROUP_ID, int $PRIVILEGE_MASK, IdentifierType|int $IDENTIFTYPE, string $NAME, \DateTimeInterface $VALID_FROM, \DateTimeInterface $VALID_TO)
    {
        parent::__construct($CODE, $PERSON_ID, $IS_PRIMARY, $ACCGROUP_ID, $PRIVILEGE_MASK, $IDENTIFTYPE, $NAME);
        $this->validFrom = $VALID_FROM;
        $this->validTo = $VALID_TO;
    }

    public function getValidFrom(): \DateTimeInterface
    {
        return $this->validFrom;
    }

    public function setValidFrom(\DateTimeInterface $validFrom): static
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    public function getValidTo(): \DateTimeInterface
    {
        return $this->validTo;
    }

    public function setValidTo(\DateTimeInterface $validTo): static
    {
        $this->validTo = $validTo;

        return $this;
    }
}
