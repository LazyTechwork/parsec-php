<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetSubAccessGroupsResponse implements ResultInterface
{
    private ?ArrayOfSubAccessGroup $GetSubAccessGroupsResult = null;

    public function getGetSubAccessGroupsResult(): ?ArrayOfSubAccessGroup
    {
        return $this->GetSubAccessGroupsResult;
    }

    public function withGetSubAccessGroupsResult(?ArrayOfSubAccessGroup $GetSubAccessGroupsResult): static
    {
        $new = clone $this;
        $new->GetSubAccessGroupsResult = $GetSubAccessGroupsResult;

        return $new;
    }
}
