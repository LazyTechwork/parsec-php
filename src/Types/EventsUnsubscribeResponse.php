<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class EventsUnsubscribeResponse implements ResultInterface
{
    private ?BaseResult $EventsUnsubscribeResult = null;

    public function getEventsUnsubscribeResult(): ?BaseResult
    {
        return $this->EventsUnsubscribeResult;
    }

    public function withEventsUnsubscribeResult(?BaseResult $EventsUnsubscribeResult): static
    {
        $new = clone $this;
        $new->EventsUnsubscribeResult = $EventsUnsubscribeResult;

        return $new;
    }
}
