<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrgUnitsHierarhyResponse implements ResultInterface
{
    private ?ArrayOfOrgUnit $GetOrgUnitsHierarhyResult = null;

    public function getGetOrgUnitsHierarhyResult(): ?ArrayOfOrgUnit
    {
        return $this->GetOrgUnitsHierarhyResult;
    }

    public function withGetOrgUnitsHierarhyResult(?ArrayOfOrgUnit $GetOrgUnitsHierarhyResult): static
    {
        $new = clone $this;
        $new->GetOrgUnitsHierarhyResult = $GetOrgUnitsHierarhyResult;

        return $new;
    }
}
