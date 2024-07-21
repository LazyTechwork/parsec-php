<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHolidaysResponse implements ResultInterface
{
    private ?ArrayOfHoliday $GetHolidaysResult = null;

    public function getGetHolidaysResult(): ?ArrayOfHoliday
    {
        return $this->GetHolidaysResult;
    }

    public function withGetHolidaysResult(?ArrayOfHoliday $GetHolidaysResult): static
    {
        $new = clone $this;
        $new->GetHolidaysResult = $GetHolidaysResult;

        return $new;
    }
}
