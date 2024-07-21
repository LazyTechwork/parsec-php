<?php

namespace LazyTechwork\Parsec\Types;

class TransactionClass extends BaseObject
{
    private int $ID;

    private ?string $NAME = null;

    private bool $IS_USER;

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

    public function isIS_USER(): bool
    {
        return $this->IS_USER;
    }

    public function withIS_USER(bool $IS_USER): static
    {
        $new = clone $this;
        $new->IS_USER = $IS_USER;

        return $new;
    }
}
