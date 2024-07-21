<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetScheduleDaysResponse implements ResultInterface
{
    private ?BaseResult $SetScheduleDaysResult = null;

    public function getSetScheduleDaysResult(): ?BaseResult
    {
        return $this->SetScheduleDaysResult;
    }

    public function withSetScheduleDaysResult(?BaseResult $SetScheduleDaysResult): static
    {
        $new = clone $this;
        $new->SetScheduleDaysResult = $SetScheduleDaysResult;

        return $new;
    }
}
