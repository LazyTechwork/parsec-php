<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CloseVisitorRequestResponse implements ResultInterface
{
    private ?BaseResult $CloseVisitorRequestResult = null;

    public function getCloseVisitorRequestResult(): ?BaseResult
    {
        return $this->CloseVisitorRequestResult;
    }

    public function withCloseVisitorRequestResult(?BaseResult $CloseVisitorRequestResult): static
    {
        $new = clone $this;
        $new->CloseVisitorRequestResult = $CloseVisitorRequestResult;

        return $new;
    }
}
