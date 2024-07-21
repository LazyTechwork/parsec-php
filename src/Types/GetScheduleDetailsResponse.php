<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetScheduleDetailsResponse implements ResultInterface
{
    private ?ArrayOfScheduleDay $GetScheduleDetailsResult = null;

    public function getGetScheduleDetailsResult(): ?ArrayOfScheduleDay
    {
        return $this->GetScheduleDetailsResult;
    }

    public function withGetScheduleDetailsResult(?ArrayOfScheduleDay $GetScheduleDetailsResult): static
    {
        $new = clone $this;
        $new->GetScheduleDetailsResult = $GetScheduleDetailsResult;

        return $new;
    }
}
