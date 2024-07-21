<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteOrgUnitResponse implements ResultInterface
{
    private ?BaseResult $DeleteOrgUnitResult = null;

    public function getDeleteOrgUnitResult(): ?BaseResult
    {
        return $this->DeleteOrgUnitResult;
    }

    public function withDeleteOrgUnitResult(?BaseResult $DeleteOrgUnitResult): static
    {
        $new = clone $this;
        $new->DeleteOrgUnitResult = $DeleteOrgUnitResult;

        return $new;
    }
}
