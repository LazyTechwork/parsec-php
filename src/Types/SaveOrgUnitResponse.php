<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SaveOrgUnitResponse implements ResultInterface
{
    private ?BaseResult $SaveOrgUnitResult = null;

    public function getSaveOrgUnitResult(): ?BaseResult
    {
        return $this->SaveOrgUnitResult;
    }

    public function withSaveOrgUnitResult(?BaseResult $SaveOrgUnitResult): static
    {
        $new = clone $this;
        $new->SaveOrgUnitResult = $SaveOrgUnitResult;

        return $new;
    }
}
