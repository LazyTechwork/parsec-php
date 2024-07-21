<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateAccessGroupResponse implements ResultInterface
{
    private ?GuidResult $CreateAccessGroupResult = null;

    public function getCreateAccessGroupResult(): ?GuidResult
    {
        return $this->CreateAccessGroupResult;
    }

    public function withCreateAccessGroupResult(?GuidResult $CreateAccessGroupResult): static
    {
        $new = clone $this;
        $new->CreateAccessGroupResult = $CreateAccessGroupResult;

        return $new;
    }
}
