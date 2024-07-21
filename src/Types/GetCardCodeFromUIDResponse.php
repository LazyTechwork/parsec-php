<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetCardCodeFromUIDResponse implements ResultInterface
{
    private ?StringResult $GetCardCodeFromUIDResult = null;

    public function getGetCardCodeFromUIDResult(): ?StringResult
    {
        return $this->GetCardCodeFromUIDResult;
    }

    public function withGetCardCodeFromUIDResult(?StringResult $GetCardCodeFromUIDResult): static
    {
        $new = clone $this;
        $new->GetCardCodeFromUIDResult = $GetCardCodeFromUIDResult;

        return $new;
    }
}
