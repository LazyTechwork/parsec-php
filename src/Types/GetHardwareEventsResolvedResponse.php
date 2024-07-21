<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHardwareEventsResolvedResponse implements ResultInterface
{
    private ?ArrayOfString $GetHardwareEventsResolvedResult = null;

    public function getGetHardwareEventsResolvedResult(): ?ArrayOfString
    {
        return $this->GetHardwareEventsResolvedResult;
    }

    public function withGetHardwareEventsResolvedResult(?ArrayOfString $GetHardwareEventsResolvedResult): static
    {
        $new = clone $this;
        $new->GetHardwareEventsResolvedResult = $GetHardwareEventsResolvedResult;

        return $new;
    }
}
