<?php

namespace LazyTechwork\Parsec\Entities;

class EventFilter extends BaseObject
{
    /**
     * @var array<int|\LazyTechwork\Parsec\Enums\TransactionKey> Массив ключей типов транзакций. В качестве параметра можно использовать один или несколько ключей транзакций
     */
    protected array $transactionTypes;

    /**
     * Класс, используемый для отбора событий по подписке по типу транзакций.
     *
     * @param array<int|\LazyTechwork\Parsec\Enums\TransactionKey> $TransactionTypes Массив ключей типов транзакций. В качестве параметра можно использовать один или несколько ключей транзакций
     */
    public function __construct(
        array $TransactionTypes
    ) {
        $this->transactionTypes = $TransactionTypes;
    }

    public function getTransactionTypes(): array
    {
        return $this->transactionTypes;
    }

    public function setTransactionTypes(array $transactionTypes): static
    {
        $this->transactionTypes = $transactionTypes;

        return $this;
    }
}
