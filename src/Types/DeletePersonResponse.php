<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeletePersonResponse implements ResultInterface
{
    private ?BaseResult $DeletePersonResult = null;

    public function getDeletePersonResult(): ?BaseResult
    {
        return $this->DeletePersonResult;
    }

    public function withDeletePersonResult(?BaseResult $DeletePersonResult): static
    {
        $new = clone $this;
        $new->DeletePersonResult = $DeletePersonResult;

        return $new;
    }
}
