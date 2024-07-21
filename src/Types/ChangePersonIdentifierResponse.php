<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ChangePersonIdentifierResponse implements ResultInterface
{
    private ?BaseResult $ChangePersonIdentifierResult = null;

    public function getChangePersonIdentifierResult(): ?BaseResult
    {
        return $this->ChangePersonIdentifierResult;
    }

    public function withChangePersonIdentifierResult(?BaseResult $ChangePersonIdentifierResult): static
    {
        $new = clone $this;
        $new->ChangePersonIdentifierResult = $ChangePersonIdentifierResult;

        return $new;
    }
}
