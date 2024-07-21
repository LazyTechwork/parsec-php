<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AddToBlackListResponse implements ResultInterface
{
    private ?BaseResult $AddToBlackListResult = null;

    public function getAddToBlackListResult(): ?BaseResult
    {
        return $this->AddToBlackListResult;
    }

    public function withAddToBlackListResult(?BaseResult $AddToBlackListResult): static
    {
        $new = clone $this;
        $new->AddToBlackListResult = $AddToBlackListResult;

        return $new;
    }
}
