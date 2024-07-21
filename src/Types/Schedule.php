<?php

namespace LazyTechwork\Parsec\Types;

class Schedule extends BaseObject
{
    private Guid $ID;

    private ?string $NAME = null;

    public function getID(): Guid
    {
        return $this->ID;
    }

    public function withID(Guid $ID): static
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
