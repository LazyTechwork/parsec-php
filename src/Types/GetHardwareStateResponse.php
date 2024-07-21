<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHardwareStateResponse implements ResultInterface
{
    private ?ArrayOfHardwareState $GetHardwareStateResult = null;

    public function getGetHardwareStateResult(): ?ArrayOfHardwareState
    {
        return $this->GetHardwareStateResult;
    }

    public function withGetHardwareStateResult(?ArrayOfHardwareState $GetHardwareStateResult): static
    {
        $new = clone $this;
        $new->GetHardwareStateResult = $GetHardwareStateResult;

        return $new;
    }
}
