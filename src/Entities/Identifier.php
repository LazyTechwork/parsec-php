<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\IdentifierType;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания идентификатора.
 */
class Identifier extends BaseIdentifier
{
    /**
     * @var UuidInterface Уникальный ключ группы доступа идентификатора
     */
    protected UuidInterface $accessGroupId;
    /**
     * @var int Маска привилегий
     */
    protected int $privilegeMask;
    /**
     * @var IdentifierType|int Тип идентификатора
     */
    protected IdentifierType|int $type;
    /**
     * @var string Наименование идентификатора (используется в информационных целях)
     */
    protected string $name;

    /**
     * Класс, используемый для описания идентификатора.
     *
     * @param string             $CODE           Код идентификатора (строка, содержащая число в шестнадцатеричном формате, длинной ровно 8 символов)
     * @param UuidInterface      $PERSON_ID      Уникальный ключ сотрудника
     * @param bool               $IS_PRIMARY     Признак, является ли идентификатор первичным
     * @param UuidInterface      $ACCGROUP_ID    Уникальный ключ группы доступа идентификатора
     * @param int                $PRIVILEGE_MASK Маска привилегий
     * @param IdentifierType|int $IDENTIFTYPE    Тип идентификатора
     * @param string             $NAME           Наименование идентификатора (используется в информационных целях)
     */
    public function __construct(#[\SensitiveParameter] string $CODE, UuidInterface $PERSON_ID, bool $IS_PRIMARY, UuidInterface $ACCGROUP_ID, int $PRIVILEGE_MASK, IdentifierType|int $IDENTIFTYPE, string $NAME)
    {
        parent::__construct($CODE, $PERSON_ID, $IS_PRIMARY);
        $this->accessGroupId = $ACCGROUP_ID;
        $this->privilegeMask = $PRIVILEGE_MASK;
        $this->type = $IDENTIFTYPE;
        $this->name = $NAME;
    }

    public function getAccessGroupId(): UuidInterface
    {
        return $this->accessGroupId;
    }

    public function setAccessGroupId(UuidInterface $accessGroupId): static
    {
        $this->accessGroupId = $accessGroupId;

        return $this;
    }

    public function getPrivilegeMask(): int
    {
        return $this->privilegeMask;
    }

    public function setPrivilegeMask(int $privilegeMask): static
    {
        $this->privilegeMask = $privilegeMask;

        return $this;
    }

    public function getType(): IdentifierType|int
    {
        return $this->type;
    }

    public function setType(IdentifierType|int $type): static
    {
        $this->type = $type;

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
}
