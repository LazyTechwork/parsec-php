<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class RemoveFromBlackListResponse implements ResultInterface
{
    private ?BaseResult $RemoveFromBlackListResult = null;

    public function getRemoveFromBlackListResult(): ?BaseResult
    {
        return $this->RemoveFromBlackListResult;
    }

    public function withRemoveFromBlackListResult(?BaseResult $RemoveFromBlackListResult): static
    {
        $new = clone $this;
        $new->RemoveFromBlackListResult = $RemoveFromBlackListResult;

        return $new;
    }
}
