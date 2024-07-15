<?php

namespace LazyTechwork\Parsec\Entities;

/**
 * Класс, используемый для описания данных события.
 */
final class EventObject extends BaseObject
{
    /**
     * @var object[] Массив значений полей, описывающих событие
     */
    private array $values;

    /**
     * Класс, используемый для описания данных события.
     *
     * @param object[] $Values Массив значений полей, описывающих событие
     */
    public function __construct(
        array $Values
    ) {
        $this->values = $Values;
    }

    public function getValues(): array
    {
        return $this->values;
    }

    public function setValues(array $values): self
    {
        $this->values = $values;

        return $this;
    }
}
