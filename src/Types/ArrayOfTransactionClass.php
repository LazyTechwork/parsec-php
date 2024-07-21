<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfTransactionClass
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\TransactionClass>|null
     */
    private ?array $TransactionClass = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\TransactionClass>|null
     */
    public function getTransactionClass(): ?array
    {
        return $this->TransactionClass;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\TransactionClass>|null $TransactionClass
     */
    public function withTransactionClass(?array $TransactionClass): static
    {
        $new = clone $this;
        $new->TransactionClass = $TransactionClass;

        return $new;
    }
}
