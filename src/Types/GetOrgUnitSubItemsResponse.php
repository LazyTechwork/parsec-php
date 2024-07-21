<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrgUnitSubItemsResponse implements ResultInterface
{
    private ?ArrayOfBaseObject $GetOrgUnitSubItemsResult = null;

    public function getGetOrgUnitSubItemsResult(): ?ArrayOfBaseObject
    {
        return $this->GetOrgUnitSubItemsResult;
    }

    public function withGetOrgUnitSubItemsResult(?ArrayOfBaseObject $GetOrgUnitSubItemsResult): static
    {
        $new = clone $this;
        $new->GetOrgUnitSubItemsResult = $GetOrgUnitSubItemsResult;

        return $new;
    }
}
