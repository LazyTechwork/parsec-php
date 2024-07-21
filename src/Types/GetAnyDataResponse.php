<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAnyDataResponse implements ResultInterface
{
    private ?ArrayOfString $GetAnyDataResult = null;

    public function getGetAnyDataResult(): ?ArrayOfString
    {
        return $this->GetAnyDataResult;
    }

    public function withGetAnyDataResult(?ArrayOfString $GetAnyDataResult): static
    {
        $new = clone $this;
        $new->GetAnyDataResult = $GetAnyDataResult;

        return $new;
    }
}
