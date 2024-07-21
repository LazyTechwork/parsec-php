<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetVehicleExtraFieldTemplatesResponse implements ResultInterface
{
    private ?ArrayOfPersonExtraFieldTemplate $GetVehicleExtraFieldTemplatesResult = null;

    public function getGetVehicleExtraFieldTemplatesResult(): ?ArrayOfPersonExtraFieldTemplate
    {
        return $this->GetVehicleExtraFieldTemplatesResult;
    }

    public function withGetVehicleExtraFieldTemplatesResult(?ArrayOfPersonExtraFieldTemplate $GetVehicleExtraFieldTemplatesResult): static
    {
        $new = clone $this;
        $new->GetVehicleExtraFieldTemplatesResult = $GetVehicleExtraFieldTemplatesResult;

        return $new;
    }
}
