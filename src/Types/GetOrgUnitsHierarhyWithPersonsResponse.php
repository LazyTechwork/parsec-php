<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrgUnitsHierarhyWithPersonsResponse implements ResultInterface
{
    private ?ArrayOfBaseObject $GetOrgUnitsHierarhyWithPersonsResult = null;

    public function getGetOrgUnitsHierarhyWithPersonsResult(): ?ArrayOfBaseObject
    {
        return $this->GetOrgUnitsHierarhyWithPersonsResult;
    }

    public function withGetOrgUnitsHierarhyWithPersonsResult(?ArrayOfBaseObject $GetOrgUnitsHierarhyWithPersonsResult): static
    {
        $new = clone $this;
        $new->GetOrgUnitsHierarhyWithPersonsResult = $GetOrgUnitsHierarhyWithPersonsResult;

        return $new;
    }
}
