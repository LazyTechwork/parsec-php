<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SaveVisitorRequestResponse implements ResultInterface
{
    private ?BaseResult $SaveVisitorRequestResult = null;

    public function getSaveVisitorRequestResult(): ?BaseResult
    {
        return $this->SaveVisitorRequestResult;
    }

    public function withSaveVisitorRequestResult(?BaseResult $SaveVisitorRequestResult): static
    {
        $new = clone $this;
        $new->SaveVisitorRequestResult = $SaveVisitorRequestResult;

        return $new;
    }
}
