<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetWorktimeSchedulesResponse implements ResultInterface
{
    private ?ArrayOfSchedule $GetWorktimeSchedulesResult = null;

    public function getGetWorktimeSchedulesResult(): ?ArrayOfSchedule
    {
        return $this->GetWorktimeSchedulesResult;
    }

    public function withGetWorktimeSchedulesResult(?ArrayOfSchedule $GetWorktimeSchedulesResult): static
    {
        $new = clone $this;
        $new->GetWorktimeSchedulesResult = $GetWorktimeSchedulesResult;

        return $new;
    }
}
