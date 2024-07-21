<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonBioIdentifiersResponse implements ResultInterface
{
    private ?ArrayOfBioIdentifier $GetPersonBioIdentifiersResult = null;

    public function getGetPersonBioIdentifiersResult(): ?ArrayOfBioIdentifier
    {
        return $this->GetPersonBioIdentifiersResult;
    }

    public function withGetPersonBioIdentifiersResult(?ArrayOfBioIdentifier $GetPersonBioIdentifiersResult): static
    {
        $new = clone $this;
        $new->GetPersonBioIdentifiersResult = $GetPersonBioIdentifiersResult;

        return $new;
    }
}
