<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrgUnitResponse implements ResultInterface
{
    private ?OrgUnit $GetOrgUnitResult = null;

    public function getGetOrgUnitResult(): ?OrgUnit
    {
        return $this->GetOrgUnitResult;
    }

    public function withGetOrgUnitResult(?OrgUnit $GetOrgUnitResult): static
    {
        $new = clone $this;
        $new->GetOrgUnitResult = $GetOrgUnitResult;

        return $new;
    }
}
