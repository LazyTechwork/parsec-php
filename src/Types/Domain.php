<?php

namespace LazyTechwork\Parsec\Types;

class Domain extends BaseObject
{
    private ?string $NAME = null;

    private ?string $DESCRIPTION = null;

    private bool $VISITOR_CONTROL;

    private bool $IS_SYSTEM;

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

    public function isVISITOR_CONTROL(): bool
    {
        return $this->VISITOR_CONTROL;
    }

    public function withVISITOR_CONTROL(bool $VISITOR_CONTROL): static
    {
        $new = clone $this;
        $new->VISITOR_CONTROL = $VISITOR_CONTROL;

        return $new;
    }

    public function isIS_SYSTEM(): bool
    {
        return $this->IS_SYSTEM;
    }

    public function withIS_SYSTEM(bool $IS_SYSTEM): static
    {
        $new = clone $this;
        $new->IS_SYSTEM = $IS_SYSTEM;

        return $new;
    }
}
