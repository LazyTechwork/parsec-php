<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetScheduleResponse implements ResultInterface
{
    private ?Schedule $GetScheduleResult = null;

    public function getGetScheduleResult(): ?Schedule
    {
        return $this->GetScheduleResult;
    }

    public function withGetScheduleResult(?Schedule $GetScheduleResult): static
    {
        $new = clone $this;
        $new->GetScheduleResult = $GetScheduleResult;

        return $new;
    }
}
