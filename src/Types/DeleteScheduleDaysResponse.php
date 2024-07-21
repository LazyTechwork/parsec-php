<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteScheduleDaysResponse implements ResultInterface
{
    private ?BaseResult $DeleteScheduleDaysResult = null;

    public function getDeleteScheduleDaysResult(): ?BaseResult
    {
        return $this->DeleteScheduleDaysResult;
    }

    public function withDeleteScheduleDaysResult(?BaseResult $DeleteScheduleDaysResult): static
    {
        $new = clone $this;
        $new->DeleteScheduleDaysResult = $DeleteScheduleDaysResult;

        return $new;
    }
}
