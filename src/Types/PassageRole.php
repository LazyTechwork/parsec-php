<?php

namespace LazyTechwork\Parsec\Types;

class PassageRole extends BaseObject
{
    private string $ID;

    private ?string $NAME = null;

    private ?string $DESCRIPTION = null;

    public function getID(): string
    {
        return $this->ID;
    }

    public function withID(string $ID): static
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

    public function getDESCRIPTION(): ?string
    {
        return $this->DESCRIPTION;
    }

    public function withDESCRIPTION(?string $DESCRIPTION): static
    {
        $new = clone $this;
        $new->DESCRIPTION = $DESCRIPTION;

        return $new;
    }
}
