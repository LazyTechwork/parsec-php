<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class EventsSubscribeResponse implements ResultInterface
{
    private ?GuidResult $EventsSubscribeResult = null;

    public function getEventsSubscribeResult(): ?GuidResult
    {
        return $this->EventsSubscribeResult;
    }

    public function withEventsSubscribeResult(?GuidResult $EventsSubscribeResult): static
    {
        $new = clone $this;
        $new->EventsSubscribeResult = $EventsSubscribeResult;

        return $new;
    }
}
