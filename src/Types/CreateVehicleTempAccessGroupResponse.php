<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateVehicleTempAccessGroupResponse implements ResultInterface
{
    private ?GuidResult $CreateVehicleTempAccessGroupResult = null;

    public function getCreateVehicleTempAccessGroupResult(): ?GuidResult
    {
        return $this->CreateVehicleTempAccessGroupResult;
    }

    public function withCreateVehicleTempAccessGroupResult(?GuidResult $CreateVehicleTempAccessGroupResult): static
    {
        $new = clone $this;
        $new->CreateVehicleTempAccessGroupResult = $CreateVehicleTempAccessGroupResult;

        return $new;
    }
}
