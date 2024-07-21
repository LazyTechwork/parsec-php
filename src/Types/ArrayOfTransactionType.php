<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfTransactionType
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\TransactionType>|null
     */
    private ?array $TransactionType = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\TransactionType>|null
     */
    public function getTransactionType(): ?array
    {
        return $this->TransactionType;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\TransactionType>|null $TransactionType
     */
    public function withTransactionType(?array $TransactionType): static
    {
        $new = clone $this;
        $new->TransactionType = $TransactionType;

        return $new;
    }
}
