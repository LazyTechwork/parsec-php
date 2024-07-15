<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

class BasePerson
{
    /**
     * @var UuidInterface Уникальный ключ сотрудника
     */
    protected UuidInterface $id;
    /**
     * @var string Фамилия
     */
    protected string $lastName;
    /**
     * @var string Имя
     */
    protected string $firstName;
    /**
     * @var string Отчество
     */
    protected string $middleName;
    /**
     * @var string Табельный номер
     */
    protected string $tabNum;

    /**
     * Класс, используемый для описания сотрудника.
     *
     * @param UuidInterface $ID          Уникальный ключ сотрудника
     * @param string        $LAST_NAME   Фамилия
     * @param string        $FIRST_NAME  Имя
     * @param string        $MIDDLE_NAME Отчество
     * @param string        $TAB_NUM     Табельный номер
     */
    public function __construct(UuidInterface $ID, #[\SensitiveParameter] string $LAST_NAME, #[\SensitiveParameter] string $FIRST_NAME, #[\SensitiveParameter] string $MIDDLE_NAME, #[\SensitiveParameter] string $TAB_NUM)
    {
        $this->id = $ID;
        $this->lastName = $LAST_NAME;
        $this->firstName = $FIRST_NAME;
        $this->middleName = $MIDDLE_NAME;
        $this->tabNum = $TAB_NUM;
    }
}
