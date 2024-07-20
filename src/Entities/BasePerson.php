<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

class BasePerson extends BaseObject
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

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function setId(UuidInterface $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(#[\SensitiveParameter] string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(#[\SensitiveParameter] string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function setMiddleName(#[\SensitiveParameter] string $middleName): static
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getTabNum(): string
    {
        return $this->tabNum;
    }

    public function setTabNum(string $tabNum): static
    {
        $this->tabNum = $tabNum;

        return $this;
    }
}
