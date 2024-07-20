<?php

namespace LazyTechwork\Parsec\Entities;

/**
 * Класс, используемый для описания сотрудника.
 */
class PersonWithPhoto extends Person
{
    /**
     * @var string Фотография сотрудника
     */
    protected string $photo;

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }
}
