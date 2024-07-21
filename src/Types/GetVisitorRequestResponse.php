<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetVisitorRequestResponse implements ResultInterface
{
    private ?VisitorRequest $GetVisitorRequestResult = null;

    public function getGetVisitorRequestResult(): ?VisitorRequest
    {
        return $this->GetVisitorRequestResult;
    }

    public function withGetVisitorRequestResult(?VisitorRequest $GetVisitorRequestResult): static
    {
        $new = clone $this;
        $new->GetVisitorRequestResult = $GetVisitorRequestResult;

        return $new;
    }
}
