<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ValidateExtraFieldValueResponse implements ResultInterface
{
    private ?BaseResult $ValidateExtraFieldValueResult = null;

    public function getValidateExtraFieldValueResult(): ?BaseResult
    {
        return $this->ValidateExtraFieldValueResult;
    }

    public function withValidateExtraFieldValueResult(?BaseResult $ValidateExtraFieldValueResult): static
    {
        $new = clone $this;
        $new->ValidateExtraFieldValueResult = $ValidateExtraFieldValueResult;

        return $new;
    }
}
