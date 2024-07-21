<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteBioIdentifierResponse implements ResultInterface
{
    private ?BaseResult $DeleteBioIdentifierResult = null;

    public function getDeleteBioIdentifierResult(): ?BaseResult
    {
        return $this->DeleteBioIdentifierResult;
    }

    public function withDeleteBioIdentifierResult(?BaseResult $DeleteBioIdentifierResult): static
    {
        $new = clone $this;
        $new->DeleteBioIdentifierResult = $DeleteBioIdentifierResult;

        return $new;
    }
}
