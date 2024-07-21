<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetIdentifierPrivilegesResponse implements ResultInterface
{
    private ?BaseResult $SetIdentifierPrivilegesResult = null;

    public function getSetIdentifierPrivilegesResult(): ?BaseResult
    {
        return $this->SetIdentifierPrivilegesResult;
    }

    public function withSetIdentifierPrivilegesResult(?BaseResult $SetIdentifierPrivilegesResult): static
    {
        $new = clone $this;
        $new->SetIdentifierPrivilegesResult = $SetIdentifierPrivilegesResult;

        return $new;
    }
}
