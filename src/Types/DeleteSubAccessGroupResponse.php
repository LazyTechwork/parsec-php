<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteSubAccessGroupResponse implements ResultInterface
{
    private ?BaseResult $DeleteSubAccessGroupResult = null;

    public function getDeleteSubAccessGroupResult(): ?BaseResult
    {
        return $this->DeleteSubAccessGroupResult;
    }

    public function withDeleteSubAccessGroupResult(?BaseResult $DeleteSubAccessGroupResult): static
    {
        $new = clone $this;
        $new->DeleteSubAccessGroupResult = $DeleteSubAccessGroupResult;

        return $new;
    }
}
