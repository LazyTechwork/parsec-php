<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAccessSchedulesResponse implements ResultInterface
{
    private ?ArrayOfSchedule $GetAccessSchedulesResult = null;

    public function getGetAccessSchedulesResult(): ?ArrayOfSchedule
    {
        return $this->GetAccessSchedulesResult;
    }

    public function withGetAccessSchedulesResult(?ArrayOfSchedule $GetAccessSchedulesResult): static
    {
        $new = clone $this;
        $new->GetAccessSchedulesResult = $GetAccessSchedulesResult;

        return $new;
    }
}
