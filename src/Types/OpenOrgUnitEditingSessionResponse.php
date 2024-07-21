<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class OpenOrgUnitEditingSessionResponse implements ResultInterface
{
    private ?GuidResult $OpenOrgUnitEditingSessionResult = null;

    public function getOpenOrgUnitEditingSessionResult(): ?GuidResult
    {
        return $this->OpenOrgUnitEditingSessionResult;
    }

    public function withOpenOrgUnitEditingSessionResult(?GuidResult $OpenOrgUnitEditingSessionResult): static
    {
        $new = clone $this;
        $new->OpenOrgUnitEditingSessionResult = $OpenOrgUnitEditingSessionResult;

        return $new;
    }
}
