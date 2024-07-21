<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AddSubAccessGroupResponse implements ResultInterface
{
    private ?GuidResult $AddSubAccessGroupResult = null;

    public function getAddSubAccessGroupResult(): ?GuidResult
    {
        return $this->AddSubAccessGroupResult;
    }

    public function withAddSubAccessGroupResult(?GuidResult $AddSubAccessGroupResult): static
    {
        $new = clone $this;
        $new->AddSubAccessGroupResult = $AddSubAccessGroupResult;

        return $new;
    }
}
