<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class EventsSubscribeCheckResponse implements ResultInterface
{
    private ?BaseResult $EventsSubscribeCheckResult = null;

    public function getEventsSubscribeCheckResult(): ?BaseResult
    {
        return $this->EventsSubscribeCheckResult;
    }

    public function withEventsSubscribeCheckResult(?BaseResult $EventsSubscribeCheckResult): static
    {
        $new = clone $this;
        $new->EventsSubscribeCheckResult = $EventsSubscribeCheckResult;

        return $new;
    }
}
