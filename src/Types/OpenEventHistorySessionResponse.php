<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class OpenEventHistorySessionResponse implements ResultInterface
{
    private ?GuidResult $OpenEventHistorySessionResult = null;

    public function getOpenEventHistorySessionResult(): ?GuidResult
    {
        return $this->OpenEventHistorySessionResult;
    }

    public function withOpenEventHistorySessionResult(?GuidResult $OpenEventHistorySessionResult): static
    {
        $new = clone $this;
        $new->OpenEventHistorySessionResult = $OpenEventHistorySessionResult;

        return $new;
    }
}
