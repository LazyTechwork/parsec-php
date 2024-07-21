<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateVisitorRequestResponse implements ResultInterface
{
    private ?VisitorRequest $CreateVisitorRequestResult = null;

    public function getCreateVisitorRequestResult(): ?VisitorRequest
    {
        return $this->CreateVisitorRequestResult;
    }

    public function withCreateVisitorRequestResult(?VisitorRequest $CreateVisitorRequestResult): static
    {
        $new = clone $this;
        $new->CreateVisitorRequestResult = $CreateVisitorRequestResult;

        return $new;
    }
}
