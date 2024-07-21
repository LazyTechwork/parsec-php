<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAcceptedVisitorRequestsResponse implements ResultInterface
{
    private ?ArrayOfVisitorRequest $GetAcceptedVisitorRequestsResult = null;

    public function getGetAcceptedVisitorRequestsResult(): ?ArrayOfVisitorRequest
    {
        return $this->GetAcceptedVisitorRequestsResult;
    }

    public function withGetAcceptedVisitorRequestsResult(?ArrayOfVisitorRequest $GetAcceptedVisitorRequestsResult): static
    {
        $new = clone $this;
        $new->GetAcceptedVisitorRequestsResult = $GetAcceptedVisitorRequestsResult;

        return $new;
    }
}
