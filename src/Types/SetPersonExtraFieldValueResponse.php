<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetPersonExtraFieldValueResponse implements ResultInterface
{
    private ?BaseResult $SetPersonExtraFieldValueResult = null;

    public function getSetPersonExtraFieldValueResult(): ?BaseResult
    {
        return $this->SetPersonExtraFieldValueResult;
    }

    public function withSetPersonExtraFieldValueResult(?BaseResult $SetPersonExtraFieldValueResult): static
    {
        $new = clone $this;
        $new->SetPersonExtraFieldValueResult = $SetPersonExtraFieldValueResult;

        return $new;
    }
}
