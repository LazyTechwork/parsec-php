<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrgUnitSubItemsHierarhyWithVisitorsResponse implements ResultInterface
{
    private ?ArrayOfBaseObject $GetOrgUnitSubItemsHierarhyWithVisitorsResult = null;

    public function getGetOrgUnitSubItemsHierarhyWithVisitorsResult(): ?ArrayOfBaseObject
    {
        return $this->GetOrgUnitSubItemsHierarhyWithVisitorsResult;
    }

    public function withGetOrgUnitSubItemsHierarhyWithVisitorsResult(?ArrayOfBaseObject $GetOrgUnitSubItemsHierarhyWithVisitorsResult): static
    {
        $new = clone $this;
        $new->GetOrgUnitSubItemsHierarhyWithVisitorsResult = $GetOrgUnitSubItemsHierarhyWithVisitorsResult;

        return $new;
    }
}
