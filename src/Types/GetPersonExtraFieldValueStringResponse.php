<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonExtraFieldValueStringResponse implements ResultInterface
{
    private ?StringResult $GetPersonExtraFieldValueStringResult = null;

    public function getGetPersonExtraFieldValueStringResult(): ?StringResult
    {
        return $this->GetPersonExtraFieldValueStringResult;
    }

    public function withGetPersonExtraFieldValueStringResult(?StringResult $GetPersonExtraFieldValueStringResult): static
    {
        $new = clone $this;
        $new->GetPersonExtraFieldValueStringResult = $GetPersonExtraFieldValueStringResult;

        return $new;
    }
}
