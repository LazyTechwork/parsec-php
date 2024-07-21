<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SaveBioIdentifierResponse implements ResultInterface
{
    private ?BaseResult $SaveBioIdentifierResult = null;

    public function getSaveBioIdentifierResult(): ?BaseResult
    {
        return $this->SaveBioIdentifierResult;
    }

    public function withSaveBioIdentifierResult(?BaseResult $SaveBioIdentifierResult): static
    {
        $new = clone $this;
        $new->SaveBioIdentifierResult = $SaveBioIdentifierResult;

        return $new;
    }
}
