<?php

namespace LazyTechwork\Parsec\Types;

class TerritoryWithComponent extends Territory
{
    private Guid $COMPONENT_ID;

    private int $FEATURE_MASK;

    public function getCOMPONENT_ID(): Guid
    {
        return $this->COMPONENT_ID;
    }

    public function withCOMPONENT_ID(Guid $COMPONENT_ID): static
    {
        $new = clone $this;
        $new->COMPONENT_ID = $COMPONENT_ID;

        return $new;
    }

    public function getFEATURE_MASK(): int
    {
        return $this->FEATURE_MASK;
    }

    public function withFEATURE_MASK(int $FEATURE_MASK): static
    {
        $new = clone $this;
        $new->FEATURE_MASK = $FEATURE_MASK;

        return $new;
    }
}
