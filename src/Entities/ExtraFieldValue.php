<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания значения дополнительного поля сотрудника.
 */
final class ExtraFieldValue extends BaseObject
{
    /**
     * @var UuidInterface Уникальный ключ шаблона
     */
    private UuidInterface $fieldId;
    /**
     * @var mixed Значение поля
     */
    private mixed $value;

    public function getFieldId(): UuidInterface
    {
        return $this->fieldId;
    }

    public function setFieldId(UuidInterface $fieldId): self
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function setValue(mixed $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'TEMPLATE_ID' => 'guid',
            'VALUE' => 'mixed',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'TEMPLATE_ID' => 'fieldId',
        'VALUE' => 'value',
    ];
}
