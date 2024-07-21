<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrgUnitSubItemsHierarhyWithPersonsResponse implements ResultInterface
{
    private ?ArrayOfBaseObject $GetOrgUnitSubItemsHierarhyWithPersonsResult = null;

    public function getGetOrgUnitSubItemsHierarhyWithPersonsResult(): ?ArrayOfBaseObject
    {
        return $this->GetOrgUnitSubItemsHierarhyWithPersonsResult;
    }

    public function withGetOrgUnitSubItemsHierarhyWithPersonsResult(?ArrayOfBaseObject $GetOrgUnitSubItemsHierarhyWithPersonsResult): static
    {
        $new = clone $this;
        $new->GetOrgUnitSubItemsHierarhyWithPersonsResult = $GetOrgUnitSubItemsHierarhyWithPersonsResult;

        return $new;
    }
}
