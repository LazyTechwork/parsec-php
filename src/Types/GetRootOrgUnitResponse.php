<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetRootOrgUnitResponse implements ResultInterface
{
    private ?OrgUnit $GetRootOrgUnitResult = null;

    public function getGetRootOrgUnitResult(): ?OrgUnit
    {
        return $this->GetRootOrgUnitResult;
    }

    public function withGetRootOrgUnitResult(?OrgUnit $GetRootOrgUnitResult): static
    {
        $new = clone $this;
        $new->GetRootOrgUnitResult = $GetRootOrgUnitResult;

        return $new;
    }
}
