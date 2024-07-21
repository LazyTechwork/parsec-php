<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetTransactionClassesResponse implements ResultInterface
{
    private ?ArrayOfTransactionClass $GetTransactionClassesResult = null;

    public function getGetTransactionClassesResult(): ?ArrayOfTransactionClass
    {
        return $this->GetTransactionClassesResult;
    }

    public function withGetTransactionClassesResult(?ArrayOfTransactionClass $GetTransactionClassesResult): static
    {
        $new = clone $this;
        $new->GetTransactionClassesResult = $GetTransactionClassesResult;

        return $new;
    }
}
