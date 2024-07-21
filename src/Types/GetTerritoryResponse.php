<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetTerritoryResponse implements ResultInterface
{
    private ?Territory $GetTerritoryResult = null;

    public function getGetTerritoryResult(): ?Territory
    {
        return $this->GetTerritoryResult;
    }

    public function withGetTerritoryResult(?Territory $GetTerritoryResult): static
    {
        $new = clone $this;
        $new->GetTerritoryResult = $GetTerritoryResult;

        return $new;
    }
}
