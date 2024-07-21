<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateOrgUnitResponse implements ResultInterface
{
    private ?GuidResult $CreateOrgUnitResult = null;

    public function getCreateOrgUnitResult(): ?GuidResult
    {
        return $this->CreateOrgUnitResult;
    }

    public function withCreateOrgUnitResult(?GuidResult $CreateOrgUnitResult): static
    {
        $new = clone $this;
        $new->CreateOrgUnitResult = $CreateOrgUnitResult;

        return $new;
    }
}
