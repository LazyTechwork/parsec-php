<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetMultiplePersonsResponse implements ResultInterface
{
    private ?ArrayOfPersonWithPhoto $GetMultiplePersonsResult = null;

    public function getGetMultiplePersonsResult(): ?ArrayOfPersonWithPhoto
    {
        return $this->GetMultiplePersonsResult;
    }

    public function withGetMultiplePersonsResult(?ArrayOfPersonWithPhoto $GetMultiplePersonsResult): static
    {
        $new = clone $this;
        $new->GetMultiplePersonsResult = $GetMultiplePersonsResult;

        return $new;
    }
}
