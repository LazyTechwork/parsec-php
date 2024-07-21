<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetPersonOrgUnitResponse implements ResultInterface
{
    private ?BaseResult $SetPersonOrgUnitResult = null;

    public function getSetPersonOrgUnitResult(): ?BaseResult
    {
        return $this->SetPersonOrgUnitResult;
    }

    public function withSetPersonOrgUnitResult(?BaseResult $SetPersonOrgUnitResult): static
    {
        $new = clone $this;
        $new->SetPersonOrgUnitResult = $SetPersonOrgUnitResult;

        return $new;
    }
}
