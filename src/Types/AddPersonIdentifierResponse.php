<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AddPersonIdentifierResponse implements ResultInterface
{
    private ?BaseResult $AddPersonIdentifierResult = null;

    public function getAddPersonIdentifierResult(): ?BaseResult
    {
        return $this->AddPersonIdentifierResult;
    }

    public function withAddPersonIdentifierResult(?BaseResult $AddPersonIdentifierResult): static
    {
        $new = clone $this;
        $new->AddPersonIdentifierResult = $AddPersonIdentifierResult;

        return $new;
    }
}
