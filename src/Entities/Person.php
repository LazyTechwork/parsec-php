<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

class Person extends BasePerson
{
    /**
     * @var UuidInterface Уникальный ключ подразделения для сотрудника
     */
    protected UuidInterface $orgId;
    /**
     * Класс, используемый для описания сотрудника.
     *
     * @param UuidInterface $ID Уникальный ключ сотрудника
     * @param string $LAST_NAME Фамилия
     * @param string $FIRST_NAME Имя
     * @param string $MIDDLE_NAME Отчество
     * @param string $TAB_NUM Табельный номер
     * @param UuidInterface $ORG_ID Уникальный ключ подразделения для сотрудника
     */
    public function __construct(UuidInterface $ID, #[\SensitiveParameter] string $LAST_NAME, #[\SensitiveParameter] string $FIRST_NAME, #[\SensitiveParameter] string $MIDDLE_NAME, #[\SensitiveParameter] string $TAB_NUM, UuidInterface $ORG_ID)
    {
        parent::__construct($ID, $LAST_NAME, $FIRST_NAME, $MIDDLE_NAME, $TAB_NUM);
        $this->orgId = $ORG_ID;
    }

    public function getOrgId(): UuidInterface
    {
        return $this->orgId;
    }

    public function setOrgId(UuidInterface $orgId): Person
    {
        $this->orgId = $orgId;
        return $this;
    }

}
