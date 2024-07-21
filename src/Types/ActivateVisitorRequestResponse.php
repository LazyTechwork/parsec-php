<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ActivateVisitorRequestResponse implements ResultInterface
{
    private ?BaseResult $ActivateVisitorRequestResult = null;

    public function getActivateVisitorRequestResult(): ?BaseResult
    {
        return $this->ActivateVisitorRequestResult;
    }

    public function withActivateVisitorRequestResult(?BaseResult $ActivateVisitorRequestResult): static
    {
        $new = clone $this;
        $new->ActivateVisitorRequestResult = $ActivateVisitorRequestResult;

        return $new;
    }
}
