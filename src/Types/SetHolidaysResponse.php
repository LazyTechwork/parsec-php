<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetHolidaysResponse implements ResultInterface
{
    private ?BaseResult $SetHolidaysResult = null;

    public function getSetHolidaysResult(): ?BaseResult
    {
        return $this->SetHolidaysResult;
    }

    public function withSetHolidaysResult(?BaseResult $SetHolidaysResult): static
    {
        $new = clone $this;
        $new->SetHolidaysResult = $SetHolidaysResult;

        return $new;
    }
}
