<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetTerritorySubItemsResponse implements ResultInterface
{
    private ?ArrayOfBaseTerritory $GetTerritorySubItemsResult = null;

    public function getGetTerritorySubItemsResult(): ?ArrayOfBaseTerritory
    {
        return $this->GetTerritorySubItemsResult;
    }

    public function withGetTerritorySubItemsResult(?ArrayOfBaseTerritory $GetTerritorySubItemsResult): static
    {
        $new = clone $this;
        $new->GetTerritorySubItemsResult = $GetTerritorySubItemsResult;

        return $new;
    }
}
