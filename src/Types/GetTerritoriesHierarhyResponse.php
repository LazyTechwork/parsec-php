<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetTerritoriesHierarhyResponse implements ResultInterface
{
    private ?ArrayOfTerritory $GetTerritoriesHierarhyResult = null;

    public function getGetTerritoriesHierarhyResult(): ?ArrayOfTerritory
    {
        return $this->GetTerritoriesHierarhyResult;
    }

    public function withGetTerritoriesHierarhyResult(?ArrayOfTerritory $GetTerritoriesHierarhyResult): static
    {
        $new = clone $this;
        $new->GetTerritoriesHierarhyResult = $GetTerritoriesHierarhyResult;

        return $new;
    }
}
