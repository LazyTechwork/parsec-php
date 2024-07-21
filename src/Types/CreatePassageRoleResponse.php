<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreatePassageRoleResponse implements ResultInterface
{
    private ?GuidResult $CreatePassageRoleResult = null;

    public function getCreatePassageRoleResult(): ?GuidResult
    {
        return $this->CreatePassageRoleResult;
    }

    public function withCreatePassageRoleResult(?GuidResult $CreatePassageRoleResult): static
    {
        $new = clone $this;
        $new->CreatePassageRoleResult = $CreatePassageRoleResult;

        return $new;
    }
}
