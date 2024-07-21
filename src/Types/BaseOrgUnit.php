<?php

namespace LazyTechwork\Parsec\Types;

class BaseOrgUnit extends BaseObject
{
    private string $ID;

    private ?string $NAME = null;

    private ?string $DESC = null;

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

    public function getDESC(): ?string
    {
        return $this->DESC;
    }

    public function withDESC(?string $DESC): static
    {
        $new = clone $this;
        $new->DESC = $DESC;

        return $new;
    }
}