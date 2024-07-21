<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateTempAccessGroupResponse implements ResultInterface
{
    private ?GuidResult $CreateTempAccessGroupResult = null;

    public function getCreateTempAccessGroupResult(): ?GuidResult
    {
        return $this->CreateTempAccessGroupResult;
    }

    public function withCreateTempAccessGroupResult(?GuidResult $CreateTempAccessGroupResult): static
    {
        $new = clone $this;
        $new->CreateTempAccessGroupResult = $CreateTempAccessGroupResult;

        return $new;
    }
}
