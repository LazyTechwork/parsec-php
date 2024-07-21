<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SavePersonScheduleFixResponse implements ResultInterface
{
    private ?BaseResult $SavePersonScheduleFixResult = null;

    public function getSavePersonScheduleFixResult(): ?BaseResult
    {
        return $this->SavePersonScheduleFixResult;
    }

    public function withSavePersonScheduleFixResult(?BaseResult $SavePersonScheduleFixResult): static
    {
        $new = clone $this;
        $new->SavePersonScheduleFixResult = $SavePersonScheduleFixResult;

        return $new;
    }
}
