<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeletePersonScheduleFixResponse implements ResultInterface
{
    private ?BaseResult $DeletePersonScheduleFixResult = null;

    public function getDeletePersonScheduleFixResult(): ?BaseResult
    {
        return $this->DeletePersonScheduleFixResult;
    }

    public function withDeletePersonScheduleFixResult(?BaseResult $DeletePersonScheduleFixResult): static
    {
        $new = clone $this;
        $new->DeletePersonScheduleFixResult = $DeletePersonScheduleFixResult;

        return $new;
    }
}
