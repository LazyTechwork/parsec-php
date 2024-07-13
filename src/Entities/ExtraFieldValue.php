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
    /**
     * Класс, используемый для описания значения дополнительного поля сотрудника.
     * @param UuidInterface $TEMPLATE_ID Уникальный ключ шаблона
     * @param mixed $VALUE Значение поля
     */
    public function __construct(
        UuidInterface $TEMPLATE_ID,
        mixed $VALUE
    ) {
        $this->fieldId = $TEMPLATE_ID;
        $this->value = $VALUE;
    }

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

}
