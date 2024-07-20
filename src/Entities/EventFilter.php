<?php

namespace LazyTechwork\Parsec\Entities;

class EventFilter extends BaseObject
{
    /**
     * @var array<int|\LazyTechwork\Parsec\Enums\TransactionKey> Массив ключей типов транзакций. В качестве параметра можно использовать один или несколько ключей транзакций
     */
    protected array $transactionTypes;

    public function getTransactionTypes(): array
    {
        return $this->transactionTypes;
    }

    public function setTransactionTypes(array $transactionTypes): static
    {
        $this->transactionTypes = $transactionTypes;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'TransactionTypes' => 'array',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'TransactionTypes' => 'transactionTypes',
    ];
}
