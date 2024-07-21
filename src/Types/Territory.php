<?php

namespace LazyTechwork\Parsec\Types;

class Territory extends BaseTerritory
{
    private string $PARENT_ID;

    public function getPARENT_ID(): string
    {
        return $this->PARENT_ID;
    }

    public function withPARENT_ID(string $PARENT_ID): static
    {
        $new = clone $this;
        $new->PARENT_ID = $PARENT_ID;

        return $new;
    }
}
