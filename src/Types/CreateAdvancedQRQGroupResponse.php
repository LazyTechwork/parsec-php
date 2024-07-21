<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateAdvancedQRQGroupResponse implements ResultInterface
{
    private ?BaseResult $CreateAdvancedQRQGroupResult = null;

    public function getCreateAdvancedQRQGroupResult(): ?BaseResult
    {
        return $this->CreateAdvancedQRQGroupResult;
    }

    public function withCreateAdvancedQRQGroupResult(?BaseResult $CreateAdvancedQRQGroupResult): static
    {
        $new = clone $this;
        $new->CreateAdvancedQRQGroupResult = $CreateAdvancedQRQGroupResult;

        return $new;
    }
}
