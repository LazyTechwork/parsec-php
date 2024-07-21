<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class BlockPersonResponse implements ResultInterface
{
    private ?BaseResult $BlockPersonResult = null;

    public function getBlockPersonResult(): ?BaseResult
    {
        return $this->BlockPersonResult;
    }

    public function withBlockPersonResult(?BaseResult $BlockPersonResult): static
    {
        $new = clone $this;
        $new->BlockPersonResult = $BlockPersonResult;

        return $new;
    }
}
