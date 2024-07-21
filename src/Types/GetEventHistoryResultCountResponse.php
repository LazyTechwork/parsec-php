<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetEventHistoryResultCountResponse implements ResultInterface
{
    private int $GetEventHistoryResultCountResult;

    public function getGetEventHistoryResultCountResult(): int
    {
        return $this->GetEventHistoryResultCountResult;
    }

    public function withGetEventHistoryResultCountResult(int $GetEventHistoryResultCountResult): static
    {
        $new = clone $this;
        $new->GetEventHistoryResultCountResult = $GetEventHistoryResultCountResult;

        return $new;
    }
}
