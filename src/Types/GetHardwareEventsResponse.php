<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetHardwareEventsResponse implements ResultInterface
{
    private ?ArrayOfString $GetHardwareEventsResult = null;

    public function getGetHardwareEventsResult(): ?ArrayOfString
    {
        return $this->GetHardwareEventsResult;
    }

    public function withGetHardwareEventsResult(?ArrayOfString $GetHardwareEventsResult): static
    {
        $new = clone $this;
        $new->GetHardwareEventsResult = $GetHardwareEventsResult;

        return $new;
    }
}
