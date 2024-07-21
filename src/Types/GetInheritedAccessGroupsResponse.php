<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetInheritedAccessGroupsResponse implements ResultInterface
{
    private ?ArrayOfGuid $GetInheritedAccessGroupsResult = null;

    public function getGetInheritedAccessGroupsResult(): ?ArrayOfGuid
    {
        return $this->GetInheritedAccessGroupsResult;
    }

    public function withGetInheritedAccessGroupsResult(?ArrayOfGuid $GetInheritedAccessGroupsResult): static
    {
        $new = clone $this;
        $new->GetInheritedAccessGroupsResult = $GetInheritedAccessGroupsResult;

        return $new;
    }
}
