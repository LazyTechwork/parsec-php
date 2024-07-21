<?php

namespace LazyTechwork\Parsec\Types;

class Holiday extends BaseObject
{
    private ?string $NAME = null;

    private int $MONTH;

    private int $DAY;

    public function getNAME(): ?string
    {
        return $this->NAME;
    }

    public function withNAME(?string $NAME): static
    {
        $new = clone $this;
        $new->NAME = $NAME;

        return $new;
    }

    public function getMONTH(): int
    {
        return $this->MONTH;
    }

    public function withMONTH(int $MONTH): static
    {
        $new = clone $this;
        $new->MONTH = $MONTH;

        return $new;
    }

    public function getDAY(): int
    {
        return $this->DAY;
    }

    public function withDAY(int $DAY): static
    {
        $new = clone $this;
        $new->DAY = $DAY;

        return $new;
    }
}
