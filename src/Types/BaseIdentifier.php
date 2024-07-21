<?php

namespace LazyTechwork\Parsec\Types;

class BaseIdentifier extends BaseObject
{
    private ?string $CODE = null;

    private string $PERSON_ID;

    private bool $IS_PRIMARY;

    public function getCODE(): ?string
    {
        return $this->CODE;
    }

    public function withCODE(?string $CODE): static
    {
        $new = clone $this;
        $new->CODE = $CODE;

        return $new;
    }

    public function getPERSON_ID(): string
    {
        return $this->PERSON_ID;
    }

    public function withPERSON_ID(string $PERSON_ID): static
    {
        $new = clone $this;
        $new->PERSON_ID = $PERSON_ID;

        return $new;
    }

    public function isIS_PRIMARY(): bool
    {
        return $this->IS_PRIMARY;
    }

    public function withIS_PRIMARY(bool $IS_PRIMARY): static
    {
        $new = clone $this;
        $new->IS_PRIMARY = $IS_PRIMARY;

        return $new;
    }
}
