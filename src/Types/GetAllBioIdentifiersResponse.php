<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAllBioIdentifiersResponse implements ResultInterface
{
    private ?ArrayOfBioIdentifier $GetAllBioIdentifiersResult = null;

    public function getGetAllBioIdentifiersResult(): ?ArrayOfBioIdentifier
    {
        return $this->GetAllBioIdentifiersResult;
    }

    public function withGetAllBioIdentifiersResult(?ArrayOfBioIdentifier $GetAllBioIdentifiersResult): static
    {
        $new = clone $this;
        $new->GetAllBioIdentifiersResult = $GetAllBioIdentifiersResult;

        return $new;
    }
}
