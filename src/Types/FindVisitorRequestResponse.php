<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class FindVisitorRequestResponse implements ResultInterface
{
    private ?VisitorRequest $FindVisitorRequestResult = null;

    public function getFindVisitorRequestResult(): ?VisitorRequest
    {
        return $this->FindVisitorRequestResult;
    }

    public function withFindVisitorRequestResult(?VisitorRequest $FindVisitorRequestResult): static
    {
        $new = clone $this;
        $new->FindVisitorRequestResult = $FindVisitorRequestResult;

        return $new;
    }
}
