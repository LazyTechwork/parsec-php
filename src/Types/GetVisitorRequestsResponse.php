<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetVisitorRequestsResponse implements ResultInterface
{
    private ?ArrayOfVisitorRequest $GetVisitorRequestsResult = null;

    public function getGetVisitorRequestsResult(): ?ArrayOfVisitorRequest
    {
        return $this->GetVisitorRequestsResult;
    }

    public function withGetVisitorRequestsResult(?ArrayOfVisitorRequest $GetVisitorRequestsResult): static
    {
        $new = clone $this;
        $new->GetVisitorRequestsResult = $GetVisitorRequestsResult;

        return $new;
    }
}
