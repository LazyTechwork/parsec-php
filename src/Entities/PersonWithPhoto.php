<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

class PersonWithPhoto extends Person
{
    protected string $photo;

    /**
     * Класс, используемый для описания сотрудника.
     *
     * @param UuidInterface $ID          Уникальный ключ сотрудника
     * @param string        $LAST_NAME   Фамилия
     * @param string        $FIRST_NAME  Имя
     * @param string        $MIDDLE_NAME Отчество
     * @param string        $TAB_NUM     Табельный номер
     * @param UuidInterface $ORG_ID      Уникальный ключ подразделения для сотрудника
     * @param string        $PHOTO       Фотография сотрудника
     */
    public function __construct(UuidInterface $ID, #[\SensitiveParameter] string $LAST_NAME, #[\SensitiveParameter] string $FIRST_NAME, #[\SensitiveParameter] string $MIDDLE_NAME, #[\SensitiveParameter] string $TAB_NUM, UuidInterface $ORG_ID, string $PHOTO)
    {
        parent::__construct($ID, $LAST_NAME, $FIRST_NAME, $MIDDLE_NAME, $TAB_NUM, $ORG_ID);
        $this->photo = $PHOTO;
    }
}
