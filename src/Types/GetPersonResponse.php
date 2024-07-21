<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonResponse implements ResultInterface
{
    private ?PersonWithPhoto $GetPersonResult = null;

    public function getGetPersonResult(): ?PersonWithPhoto
    {
        return $this->GetPersonResult;
    }

    public function withGetPersonResult(?PersonWithPhoto $GetPersonResult): static
    {
        $new = clone $this;
        $new->GetPersonResult = $GetPersonResult;

        return $new;
    }
}
