<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateAccessScheduleResponse implements ResultInterface
{
    private ?GuidResult $CreateAccessScheduleResult = null;

    public function getCreateAccessScheduleResult(): ?GuidResult
    {
        return $this->CreateAccessScheduleResult;
    }

    public function withCreateAccessScheduleResult(?GuidResult $CreateAccessScheduleResult): static
    {
        $new = clone $this;
        $new->CreateAccessScheduleResult = $CreateAccessScheduleResult;

        return $new;
    }
}
