<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetIssuedVisitorRequestsResponse implements ResultInterface
{
    private ?ArrayOfVisitorRequest $GetIssuedVisitorRequestsResult = null;

    public function getGetIssuedVisitorRequestsResult(): ?ArrayOfVisitorRequest
    {
        return $this->GetIssuedVisitorRequestsResult;
    }

    public function withGetIssuedVisitorRequestsResult(?ArrayOfVisitorRequest $GetIssuedVisitorRequestsResult): static
    {
        $new = clone $this;
        $new->GetIssuedVisitorRequestsResult = $GetIssuedVisitorRequestsResult;

        return $new;
    }
}
