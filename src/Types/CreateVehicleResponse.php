<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateVehicleResponse implements ResultInterface
{
    private ?GuidResult $CreateVehicleResult = null;

    public function getCreateVehicleResult(): ?GuidResult
    {
        return $this->CreateVehicleResult;
    }

    public function withCreateVehicleResult(?GuidResult $CreateVehicleResult): static
    {
        $new = clone $this;
        $new->CreateVehicleResult = $CreateVehicleResult;

        return $new;
    }
}
