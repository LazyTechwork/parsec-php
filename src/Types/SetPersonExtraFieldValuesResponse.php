<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetPersonExtraFieldValuesResponse implements ResultInterface
{
    private ?BaseResult $SetPersonExtraFieldValuesResult = null;

    public function getSetPersonExtraFieldValuesResult(): ?BaseResult
    {
        return $this->SetPersonExtraFieldValuesResult;
    }

    public function withSetPersonExtraFieldValuesResult(?BaseResult $SetPersonExtraFieldValuesResult): static
    {
        $new = clone $this;
        $new->SetPersonExtraFieldValuesResult = $SetPersonExtraFieldValuesResult;

        return $new;
    }
}
