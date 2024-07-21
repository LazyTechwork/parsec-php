<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CloseAllActiveVisitorRequestsResponse implements ResultInterface
{
    private ?BaseResult $CloseAllActiveVisitorRequestsResult = null;

    public function getCloseAllActiveVisitorRequestsResult(): ?BaseResult
    {
        return $this->CloseAllActiveVisitorRequestsResult;
    }

    public function withCloseAllActiveVisitorRequestsResult(?BaseResult $CloseAllActiveVisitorRequestsResult): static
    {
        $new = clone $this;
        $new->CloseAllActiveVisitorRequestsResult = $CloseAllActiveVisitorRequestsResult;

        return $new;
    }
}
