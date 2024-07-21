<?php

namespace LazyTechwork\Parsec\Types;

class BasePerson extends BaseObject
{
    private string $ID;

    private ?string $FIRST_NAME = null;

    private ?string $LAST_NAME = null;

    private ?string $MIDDLE_NAME = null;

    private ?string $TAB_NUM = null;

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

    public function getFIRST_NAME(): ?string
    {
        return $this->FIRST_NAME;
    }

    public function withFIRST_NAME(?string $FIRST_NAME): static
    {
        $new = clone $this;
        $new->FIRST_NAME = $FIRST_NAME;

        return $new;
    }

    public function getLAST_NAME(): ?string
    {
        return $this->LAST_NAME;
    }

    public function withLAST_NAME(?string $LAST_NAME): static
    {
        $new = clone $this;
        $new->LAST_NAME = $LAST_NAME;

        return $new;
    }

    public function getMIDDLE_NAME(): ?string
    {
        return $this->MIDDLE_NAME;
    }

    public function withMIDDLE_NAME(?string $MIDDLE_NAME): static
    {
        $new = clone $this;
        $new->MIDDLE_NAME = $MIDDLE_NAME;

        return $new;
    }

    public function getTAB_NUM(): ?string
    {
        return $this->TAB_NUM;
    }

    public function withTAB_NUM(?string $TAB_NUM): static
    {
        $new = clone $this;
        $new->TAB_NUM = $TAB_NUM;

        return $new;
    }
}
