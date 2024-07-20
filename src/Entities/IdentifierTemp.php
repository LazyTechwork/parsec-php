<?php

namespace LazyTechwork\Parsec\Entities;

/**
 * Класс, используемый для описания временного идентификатора.
 */
class IdentifierTemp extends Identifier
{
    protected \DateTimeInterface $validFrom;
    protected \DateTimeInterface $validTo;

    public function getValidFrom(): \DateTimeInterface
    {
        return $this->validFrom;
    }

    public function setValidFrom(\DateTimeInterface $validFrom): static
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    public function getValidTo(): \DateTimeInterface
    {
        return $this->validTo;
    }

    public function setValidTo(\DateTimeInterface $validTo): static
    {
        $this->validTo = $validTo;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'CODE' => 'string',
            'PERSON_ID' => 'guid',
            'IS_PRIMARY' => 'bool',
            'ACCGROUP_ID' => 'guid',
            'PRIVILEGE_MASK' => 'int',
            'NAME' => 'string',
            'VALID_FROM' => 'DateTimeInterface',
            'VALID_TO' => 'DateTimeInterface',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'VALID_FROM' => 'validFrom',
        'VALID_TO' => 'validTo',
    ];
}
