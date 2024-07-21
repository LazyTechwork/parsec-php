<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AddPersonScheduleFixResponse implements ResultInterface
{
    private ?GuidResult $AddPersonScheduleFixResult = null;

    public function getAddPersonScheduleFixResult(): ?GuidResult
    {
        return $this->AddPersonScheduleFixResult;
    }

    public function withAddPersonScheduleFixResult(?GuidResult $AddPersonScheduleFixResult): static
    {
        $new = clone $this;
        $new->AddPersonScheduleFixResult = $AddPersonScheduleFixResult;

        return $new;
    }
}
