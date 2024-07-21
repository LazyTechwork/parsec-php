<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class EventsUnsubscribeUrlResponse implements ResultInterface
{
    private ?BaseResult $EventsUnsubscribeUrlResult = null;

    public function getEventsUnsubscribeUrlResult(): ?BaseResult
    {
        return $this->EventsUnsubscribeUrlResult;
    }

    public function withEventsUnsubscribeUrlResult(?BaseResult $EventsUnsubscribeUrlResult): static
    {
        $new = clone $this;
        $new->EventsUnsubscribeUrlResult = $EventsUnsubscribeUrlResult;

        return $new;
    }
}
