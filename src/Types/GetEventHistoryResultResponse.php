<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetEventHistoryResultResponse implements ResultInterface
{
    private ?ArrayOfEventObject $GetEventHistoryResultResult = null;

    public function getGetEventHistoryResultResult(): ?ArrayOfEventObject
    {
        return $this->GetEventHistoryResultResult;
    }

    public function withGetEventHistoryResultResult(?ArrayOfEventObject $GetEventHistoryResultResult): static
    {
        $new = clone $this;
        $new->GetEventHistoryResultResult = $GetEventHistoryResultResult;

        return $new;
    }
}
