<?php

namespace LazyTechwork\Parsec\Types;

class EventFilter
{
    private ?ArrayOfUnsignedInt $TransactionTypes = null;

    public function getTransactionTypes(): ?ArrayOfUnsignedInt
    {
        return $this->TransactionTypes;
    }

    public function withTransactionTypes(?ArrayOfUnsignedInt $TransactionTypes): static
    {
        $new = clone $this;
        $new->TransactionTypes = $TransactionTypes;

        return $new;
    }
}
