<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreatePersonResponse implements ResultInterface
{
    private ?GuidResult $CreatePersonResult = null;

    public function getCreatePersonResult(): ?GuidResult
    {
        return $this->CreatePersonResult;
    }

    public function withCreatePersonResult(?GuidResult $CreatePersonResult): static
    {
        $new = clone $this;
        $new->CreatePersonResult = $CreatePersonResult;

        return $new;
    }
}
