<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetRootTerritoryResponse implements ResultInterface
{
    private ?Territory $GetRootTerritoryResult = null;

    public function getGetRootTerritoryResult(): ?Territory
    {
        return $this->GetRootTerritoryResult;
    }

    public function withGetRootTerritoryResult(?Territory $GetRootTerritoryResult): static
    {
        $new = clone $this;
        $new->GetRootTerritoryResult = $GetRootTerritoryResult;

        return $new;
    }
}
