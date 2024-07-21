<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeletePassageRoleResponse implements ResultInterface
{
    private ?BaseResult $DeletePassageRoleResult = null;

    public function getDeletePassageRoleResult(): ?BaseResult
    {
        return $this->DeletePassageRoleResult;
    }

    public function withDeletePassageRoleResult(?BaseResult $DeletePassageRoleResult): static
    {
        $new = clone $this;
        $new->DeletePassageRoleResult = $DeletePassageRoleResult;

        return $new;
    }
}
