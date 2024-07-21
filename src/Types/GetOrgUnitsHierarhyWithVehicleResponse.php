<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrgUnitsHierarhyWithVehicleResponse implements ResultInterface
{
    private ?ArrayOfBaseObject $GetOrgUnitsHierarhyWithVehicleResult = null;

    public function getGetOrgUnitsHierarhyWithVehicleResult(): ?ArrayOfBaseObject
    {
        return $this->GetOrgUnitsHierarhyWithVehicleResult;
    }

    public function withGetOrgUnitsHierarhyWithVehicleResult(?ArrayOfBaseObject $GetOrgUnitsHierarhyWithVehicleResult): static
    {
        $new = clone $this;
        $new->GetOrgUnitsHierarhyWithVehicleResult = $GetOrgUnitsHierarhyWithVehicleResult;

        return $new;
    }
}
