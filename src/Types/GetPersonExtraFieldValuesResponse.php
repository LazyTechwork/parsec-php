<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonExtraFieldValuesResponse implements ResultInterface
{
    private ?ArrayOfExtraFieldValue $GetPersonExtraFieldValuesResult = null;

    public function getGetPersonExtraFieldValuesResult(): ?ArrayOfExtraFieldValue
    {
        return $this->GetPersonExtraFieldValuesResult;
    }

    public function withGetPersonExtraFieldValuesResult(?ArrayOfExtraFieldValue $GetPersonExtraFieldValuesResult): static
    {
        $new = clone $this;
        $new->GetPersonExtraFieldValuesResult = $GetPersonExtraFieldValuesResult;

        return $new;
    }
}
