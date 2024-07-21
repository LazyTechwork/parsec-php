<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class AddBioIdentifierResponse implements ResultInterface
{
    private ?GuidResult $AddBioIdentifierResult = null;

    public function getAddBioIdentifierResult(): ?GuidResult
    {
        return $this->AddBioIdentifierResult;
    }

    public function withAddBioIdentifierResult(?GuidResult $AddBioIdentifierResult): static
    {
        $new = clone $this;
        $new->AddBioIdentifierResult = $AddBioIdentifierResult;

        return $new;
    }
}
