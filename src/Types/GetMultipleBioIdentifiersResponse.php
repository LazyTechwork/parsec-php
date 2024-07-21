<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetMultipleBioIdentifiersResponse implements ResultInterface
{
    private ?ArrayOfBioIdentifier $GetMultipleBioIdentifiersResult = null;

    public function getGetMultipleBioIdentifiersResult(): ?ArrayOfBioIdentifier
    {
        return $this->GetMultipleBioIdentifiersResult;
    }

    public function withGetMultipleBioIdentifiersResult(?ArrayOfBioIdentifier $GetMultipleBioIdentifiersResult): static
    {
        $new = clone $this;
        $new->GetMultipleBioIdentifiersResult = $GetMultipleBioIdentifiersResult;

        return $new;
    }
}
