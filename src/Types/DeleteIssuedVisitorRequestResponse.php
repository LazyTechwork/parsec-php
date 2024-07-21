<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteIssuedVisitorRequestResponse implements ResultInterface
{
    private ?BaseResult $DeleteIssuedVisitorRequestResult = null;

    public function getDeleteIssuedVisitorRequestResult(): ?BaseResult
    {
        return $this->DeleteIssuedVisitorRequestResult;
    }

    public function withDeleteIssuedVisitorRequestResult(?BaseResult $DeleteIssuedVisitorRequestResult): static
    {
        $new = clone $this;
        $new->DeleteIssuedVisitorRequestResult = $DeleteIssuedVisitorRequestResult;

        return $new;
    }
}
