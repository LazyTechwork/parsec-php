<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class FindVehicleResponse implements ResultInterface
{
    private ?ArrayOfPerson $FindVehicleResult = null;

    public function getFindVehicleResult(): ?ArrayOfPerson
    {
        return $this->FindVehicleResult;
    }

    public function withFindVehicleResult(?ArrayOfPerson $FindVehicleResult): static
    {
        $new = clone $this;
        $new->FindVehicleResult = $FindVehicleResult;

        return $new;
    }
}
