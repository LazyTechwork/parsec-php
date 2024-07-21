<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CheckRoleResponse implements ResultInterface
{
    private ?BaseResult $CheckRoleResult = null;

    public function getCheckRoleResult(): ?BaseResult
    {
        return $this->CheckRoleResult;
    }

    public function withCheckRoleResult(?BaseResult $CheckRoleResult): static
    {
        $new = clone $this;
        $new->CheckRoleResult = $CheckRoleResult;

        return $new;
    }
}
