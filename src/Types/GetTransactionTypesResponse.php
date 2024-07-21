<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetTransactionTypesResponse implements ResultInterface
{
    private ?ArrayOfTransactionType $GetTransactionTypesResult = null;

    public function getGetTransactionTypesResult(): ?ArrayOfTransactionType
    {
        return $this->GetTransactionTypesResult;
    }

    public function withGetTransactionTypesResult(?ArrayOfTransactionType $GetTransactionTypesResult): static
    {
        $new = clone $this;
        $new->GetTransactionTypesResult = $GetTransactionTypesResult;

        return $new;
    }
}
