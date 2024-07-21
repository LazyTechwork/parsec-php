<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SavePassageRoleResponse implements ResultInterface
{
    private ?BaseResult $SavePassageRoleResult = null;

    public function getSavePassageRoleResult(): ?BaseResult
    {
        return $this->SavePassageRoleResult;
    }

    public function withSavePassageRoleResult(?BaseResult $SavePassageRoleResult): static
    {
        $new = clone $this;
        $new->SavePassageRoleResult = $SavePassageRoleResult;

        return $new;
    }
}
