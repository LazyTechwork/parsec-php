<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrgUnitSubItemsHierarhyWithVehicleResponse implements ResultInterface
{
    private ?ArrayOfBaseObject $GetOrgUnitSubItemsHierarhyWithVehicleResult = null;

    public function getGetOrgUnitSubItemsHierarhyWithVehicleResult(): ?ArrayOfBaseObject
    {
        return $this->GetOrgUnitSubItemsHierarhyWithVehicleResult;
    }

    public function withGetOrgUnitSubItemsHierarhyWithVehicleResult(?ArrayOfBaseObject $GetOrgUnitSubItemsHierarhyWithVehicleResult): static
    {
        $new = clone $this;
        $new->GetOrgUnitSubItemsHierarhyWithVehicleResult = $GetOrgUnitSubItemsHierarhyWithVehicleResult;

        return $new;
    }
}
