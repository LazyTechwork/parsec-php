<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetScheduleFixResponse implements ResultInterface
{
    private ?BaseResult $SetScheduleFixResult = null;

    public function getSetScheduleFixResult(): ?BaseResult
    {
        return $this->SetScheduleFixResult;
    }

    public function withSetScheduleFixResult(?BaseResult $SetScheduleFixResult): static
    {
        $new = clone $this;
        $new->SetScheduleFixResult = $SetScheduleFixResult;

        return $new;
    }
}
