<?php

namespace LazyTechwork\Parsec\Types;

class Identifier extends BaseIdentifier
{
    private string $ACCGROUP_ID;

    private int $PRIVILEGE_MASK;

    private int $IDENTIFTYPE;

    private ?string $NAME = null;

    public function getACCGROUP_ID(): string
    {
        return $this->ACCGROUP_ID;
    }

    public function withACCGROUP_ID(string $ACCGROUP_ID): static
    {
        $new = clone $this;
        $new->ACCGROUP_ID = $ACCGROUP_ID;

        return $new;
    }

    public function getPRIVILEGE_MASK(): int
    {
        return $this->PRIVILEGE_MASK;
    }

    public function withPRIVILEGE_MASK(int $PRIVILEGE_MASK): static
    {
        $new = clone $this;
        $new->PRIVILEGE_MASK = $PRIVILEGE_MASK;

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
