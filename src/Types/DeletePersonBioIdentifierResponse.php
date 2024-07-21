<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DeletePersonBioIdentifierResponse implements ResultInterface
{
    private ?BaseResult $DeletePersonBioIdentifierResult = null;

    public function getDeletePersonBioIdentifierResult(): ?BaseResult
    {
        return $this->DeletePersonBioIdentifierResult;
    }

    public function withDeletePersonBioIdentifierResult(?BaseResult $DeletePersonBioIdentifierResult): static
    {
        $new = clone $this;
        $new->DeletePersonBioIdentifierResult = $DeletePersonBioIdentifierResult;

        return $new;
    }
}
