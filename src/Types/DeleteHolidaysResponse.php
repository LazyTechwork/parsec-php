<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteHolidaysResponse implements ResultInterface
{
    private ?BaseResult $DeleteHolidaysResult = null;

    public function getDeleteHolidaysResult(): ?BaseResult
    {
        return $this->DeleteHolidaysResult;
    }

    public function withDeleteHolidaysResult(?BaseResult $DeleteHolidaysResult): static
    {
        $new = clone $this;
        $new->DeleteHolidaysResult = $DeleteHolidaysResult;

        return $new;
    }
}
