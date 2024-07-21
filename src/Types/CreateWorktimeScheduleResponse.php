<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateWorktimeScheduleResponse implements ResultInterface
{
    private ?GuidResult $CreateWorktimeScheduleResult = null;

    public function getCreateWorktimeScheduleResult(): ?GuidResult
    {
        return $this->CreateWorktimeScheduleResult;
    }

    public function withCreateWorktimeScheduleResult(?GuidResult $CreateWorktimeScheduleResult): static
    {
        $new = clone $this;
        $new->CreateWorktimeScheduleResult = $CreateWorktimeScheduleResult;

        return $new;
    }
}
