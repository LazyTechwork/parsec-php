<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetPersonWorktimeScheduleResponse implements ResultInterface
{
    private ?BaseResult $SetPersonWorktimeScheduleResult = null;

    public function getSetPersonWorktimeScheduleResult(): ?BaseResult
    {
        return $this->SetPersonWorktimeScheduleResult;
    }

    public function withSetPersonWorktimeScheduleResult(?BaseResult $SetPersonWorktimeScheduleResult): static
    {
        $new = clone $this;
        $new->SetPersonWorktimeScheduleResult = $SetPersonWorktimeScheduleResult;

        return $new;
    }
}
