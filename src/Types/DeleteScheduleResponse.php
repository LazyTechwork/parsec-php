<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteScheduleResponse implements ResultInterface
{
    private ?BaseResult $DeleteScheduleResult = null;

    public function getDeleteScheduleResult(): ?BaseResult
    {
        return $this->DeleteScheduleResult;
    }

    public function withDeleteScheduleResult(?BaseResult $DeleteScheduleResult): static
    {
        $new = clone $this;
        $new->DeleteScheduleResult = $DeleteScheduleResult;

        return $new;
    }
}
