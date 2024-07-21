<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SaveScheduleResponse implements ResultInterface
{
    private ?BaseResult $SaveScheduleResult = null;

    public function getSaveScheduleResult(): ?BaseResult
    {
        return $this->SaveScheduleResult;
    }

    public function withSaveScheduleResult(?BaseResult $SaveScheduleResult): static
    {
        $new = clone $this;
        $new->SaveScheduleResult = $SaveScheduleResult;

        return $new;
    }
}
