<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetEventsResponse implements ResultInterface
{
    private ?EventsHistoryResult $GetEventsResult = null;

    public function getGetEventsResult(): ?EventsHistoryResult
    {
        return $this->GetEventsResult;
    }

    public function withGetEventsResult(?EventsHistoryResult $GetEventsResult): static
    {
        $new = clone $this;
        $new->GetEventsResult = $GetEventsResult;

        return $new;
    }
}
