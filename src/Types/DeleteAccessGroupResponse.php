<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteAccessGroupResponse implements ResultInterface
{
    private ?BaseResult $DeleteAccessGroupResult = null;

    public function getDeleteAccessGroupResult(): ?BaseResult
    {
        return $this->DeleteAccessGroupResult;
    }

    public function withDeleteAccessGroupResult(?BaseResult $DeleteAccessGroupResult): static
    {
        $new = clone $this;
        $new->DeleteAccessGroupResult = $DeleteAccessGroupResult;

        return $new;
    }
}
