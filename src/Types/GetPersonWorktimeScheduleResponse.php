<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonWorktimeScheduleResponse implements ResultInterface
{
    private ?GuidResult $GetPersonWorktimeScheduleResult = null;

    public function getGetPersonWorktimeScheduleResult(): ?GuidResult
    {
        return $this->GetPersonWorktimeScheduleResult;
    }

    public function withGetPersonWorktimeScheduleResult(?GuidResult $GetPersonWorktimeScheduleResult): static
    {
        $new = clone $this;
        $new->GetPersonWorktimeScheduleResult = $GetPersonWorktimeScheduleResult;

        return $new;
    }
}
