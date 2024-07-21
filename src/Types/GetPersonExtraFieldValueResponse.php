<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonExtraFieldValueResponse implements ResultInterface
{
    private ?ObjectResult $GetPersonExtraFieldValueResult = null;

    public function getGetPersonExtraFieldValueResult(): ?ObjectResult
    {
        return $this->GetPersonExtraFieldValueResult;
    }

    public function withGetPersonExtraFieldValueResult(?ObjectResult $GetPersonExtraFieldValueResult): static
    {
        $new = clone $this;
        $new->GetPersonExtraFieldValueResult = $GetPersonExtraFieldValueResult;

        return $new;
    }
}
