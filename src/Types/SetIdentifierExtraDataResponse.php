<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetIdentifierExtraDataResponse implements ResultInterface
{
    private ?BaseResult $SetIdentifierExtraDataResult = null;

    public function getSetIdentifierExtraDataResult(): ?BaseResult
    {
        return $this->SetIdentifierExtraDataResult;
    }

    public function withSetIdentifierExtraDataResult(?BaseResult $SetIdentifierExtraDataResult): static
    {
        $new = clone $this;
        $new->SetIdentifierExtraDataResult = $SetIdentifierExtraDataResult;

        return $new;
    }
}
