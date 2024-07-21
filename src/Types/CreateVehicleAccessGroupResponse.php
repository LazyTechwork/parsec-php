<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateVehicleAccessGroupResponse implements ResultInterface
{
    private ?GuidResult $CreateVehicleAccessGroupResult = null;

    public function getCreateVehicleAccessGroupResult(): ?GuidResult
    {
        return $this->CreateVehicleAccessGroupResult;
    }

    public function withCreateVehicleAccessGroupResult(?GuidResult $CreateVehicleAccessGroupResult): static
    {
        $new = clone $this;
        $new->CreateVehicleAccessGroupResult = $CreateVehicleAccessGroupResult;

        return $new;
    }
}
