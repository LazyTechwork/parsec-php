<?php

namespace LazyTechwork\Parsec\Types;

class AccessGroup extends BaseObject
{
    private string $ID;

    private ?string $NAME = null;

    private int $IDENTIFTYPE;

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

    public function getIDENTIFTYPE(): int
    {
        return $this->IDENTIFTYPE;
    }

    public function withIDENTIFTYPE(int $IDENTIFTYPE): static
    {
        $new = clone $this;
        $new->IDENTIFTYPE = $IDENTIFTYPE;

        return $new;
    }
}
