<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteAdvancedQRQGroupResponse implements ResultInterface
{
    private ?BaseResult $DeleteAdvancedQRQGroupResult = null;

    public function getDeleteAdvancedQRQGroupResult(): ?BaseResult
    {
        return $this->DeleteAdvancedQRQGroupResult;
    }

    public function withDeleteAdvancedQRQGroupResult(?BaseResult $DeleteAdvancedQRQGroupResult): static
    {
        $new = clone $this;
        $new->DeleteAdvancedQRQGroupResult = $DeleteAdvancedQRQGroupResult;

        return $new;
    }
}
