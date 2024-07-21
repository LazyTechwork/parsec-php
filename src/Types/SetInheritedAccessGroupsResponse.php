<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetInheritedAccessGroupsResponse implements ResultInterface
{
    private ?BaseResult $SetInheritedAccessGroupsResult = null;

    public function getSetInheritedAccessGroupsResult(): ?BaseResult
    {
        return $this->SetInheritedAccessGroupsResult;
    }

    public function withSetInheritedAccessGroupsResult(?BaseResult $SetInheritedAccessGroupsResult): static
    {
        $new = clone $this;
        $new->SetInheritedAccessGroupsResult = $SetInheritedAccessGroupsResult;

        return $new;
    }
}
