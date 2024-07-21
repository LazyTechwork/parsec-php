<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetIdentifierExtraDataResponse implements ResultInterface
{
    private ?IdentifierExData $GetIdentifierExtraDataResult = null;

    public function getGetIdentifierExtraDataResult(): ?IdentifierExData
    {
        return $this->GetIdentifierExtraDataResult;
    }

    public function withGetIdentifierExtraDataResult(?IdentifierExData $GetIdentifierExtraDataResult): static
    {
        $new = clone $this;
        $new->GetIdentifierExtraDataResult = $GetIdentifierExtraDataResult;

        return $new;
    }
}
