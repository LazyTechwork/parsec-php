<?php

namespace LazyTechwork\Parsec\Types;

class QRAdvancedGroup extends BaseObject
{
    private int $ID;

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
