<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrgUnitsHierarhyWithVisitorsResponse implements ResultInterface
{
    private ?ArrayOfBaseObject $GetOrgUnitsHierarhyWithVisitorsResult = null;

    public function getGetOrgUnitsHierarhyWithVisitorsResult(): ?ArrayOfBaseObject
    {
        return $this->GetOrgUnitsHierarhyWithVisitorsResult;
    }

    public function withGetOrgUnitsHierarhyWithVisitorsResult(?ArrayOfBaseObject $GetOrgUnitsHierarhyWithVisitorsResult): static
    {
        $new = clone $this;
        $new->GetOrgUnitsHierarhyWithVisitorsResult = $GetOrgUnitsHierarhyWithVisitorsResult;

        return $new;
    }
}
