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

    public function getValues(): array
    {
        return $this->values;
    }

    public function setValues(array $values): self
    {
        $this->values = $values;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'Values' => 'array',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'Values' => 'values',
    ];
}
