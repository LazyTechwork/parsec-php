<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetScheduleIntervalsResponse implements ResultInterface
{
    private ?ArrayOfTimeInterval $GetScheduleIntervalsResult = null;

    public function getGetScheduleIntervalsResult(): ?ArrayOfTimeInterval
    {
        return $this->GetScheduleIntervalsResult;
    }

    public function withGetScheduleIntervalsResult(?ArrayOfTimeInterval $GetScheduleIntervalsResult): static
    {
        $new = clone $this;
        $new->GetScheduleIntervalsResult = $GetScheduleIntervalsResult;

        return $new;
    }
}
