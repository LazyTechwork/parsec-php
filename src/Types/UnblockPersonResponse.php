<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class UnblockPersonResponse implements ResultInterface
{
    private ?BaseResult $UnblockPersonResult = null;

    public function getUnblockPersonResult(): ?BaseResult
    {
        return $this->UnblockPersonResult;
    }

    public function withUnblockPersonResult(?BaseResult $UnblockPersonResult): static
    {
        $new = clone $this;
        $new->UnblockPersonResult = $UnblockPersonResult;

        return $new;
    }
}
