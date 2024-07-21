<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPassageRolesResponse implements ResultInterface
{
    private ?ArrayOfPassageRole $GetPassageRolesResult = null;

    public function getGetPassageRolesResult(): ?ArrayOfPassageRole
    {
        return $this->GetPassageRolesResult;
    }

    public function withGetPassageRolesResult(?ArrayOfPassageRole $GetPassageRolesResult): static
    {
        $new = clone $this;
        $new->GetPassageRolesResult = $GetPassageRolesResult;

        return $new;
    }
}
