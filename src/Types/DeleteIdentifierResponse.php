<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteIdentifierResponse implements ResultInterface
{
    private ?BaseResult $DeleteIdentifierResult = null;

    public function getDeleteIdentifierResult(): ?BaseResult
    {
        return $this->DeleteIdentifierResult;
    }

    public function withDeleteIdentifierResult(?BaseResult $DeleteIdentifierResult): static
    {
        $new = clone $this;
        $new->DeleteIdentifierResult = $DeleteIdentifierResult;

        return $new;
    }
}
