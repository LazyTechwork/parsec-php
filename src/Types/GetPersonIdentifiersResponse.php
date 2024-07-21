<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonIdentifiersResponse implements ResultInterface
{
    private ?ArrayOfIdentifier $GetPersonIdentifiersResult = null;

    public function getGetPersonIdentifiersResult(): ?ArrayOfIdentifier
    {
        return $this->GetPersonIdentifiersResult;
    }

    public function withGetPersonIdentifiersResult(?ArrayOfIdentifier $GetPersonIdentifiersResult): static
    {
        $new = clone $this;
        $new->GetPersonIdentifiersResult = $GetPersonIdentifiersResult;

        return $new;
    }
}
