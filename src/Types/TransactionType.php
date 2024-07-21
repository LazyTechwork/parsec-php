<?php

namespace LazyTechwork\Parsec\Types;

class TransactionType extends BaseObject
{
    private int $ID;

    private int $CLASS_MASK;

    private ?string $NAME = null;

    public function getID(): int
    {
        return $this->ID;
    }

    public function withID(int $ID): static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    public function getCLASS_MASK(): int
    {
        return $this->CLASS_MASK;
    }

    public function withCLASS_MASK(int $CLASS_MASK): static
    {
        $new = clone $this;
        $new->CLASS_MASK = $CLASS_MASK;

        return $new;
    }

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
}
