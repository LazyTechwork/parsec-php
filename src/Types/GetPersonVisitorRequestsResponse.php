<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonVisitorRequestsResponse implements ResultInterface
{
    private ?ArrayOfVisitorRequest $GetPersonVisitorRequestsResult = null;

    public function getGetPersonVisitorRequestsResult(): ?ArrayOfVisitorRequest
    {
        return $this->GetPersonVisitorRequestsResult;
    }

    public function withGetPersonVisitorRequestsResult(?ArrayOfVisitorRequest $GetPersonVisitorRequestsResult): static
    {
        $new = clone $this;
        $new->GetPersonVisitorRequestsResult = $GetPersonVisitorRequestsResult;

        return $new;
    }
}
