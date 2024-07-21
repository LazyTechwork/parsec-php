<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAccessGroupsResponse implements ResultInterface
{
    private ?ArrayOfAccessGroup $GetAccessGroupsResult = null;

    public function getGetAccessGroupsResult(): ?ArrayOfAccessGroup
    {
        return $this->GetAccessGroupsResult;
    }

    public function withGetAccessGroupsResult(?ArrayOfAccessGroup $GetAccessGroupsResult): static
    {
        $new = clone $this;
        $new->GetAccessGroupsResult = $GetAccessGroupsResult;

        return $new;
    }
}
