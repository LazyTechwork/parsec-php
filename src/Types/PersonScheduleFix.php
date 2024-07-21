<?php

namespace LazyTechwork\Parsec\Types;

class PersonScheduleFix extends BaseObject
{
    private string $FIX_ID;

    private string $PERSON_ID;

    private int $TYPE_ID;

    private \DateTimeInterface $START;

    private \DateTimeInterface $END;

    private ?string $COMMENT = null;

    public function getFIX_ID(): string
    {
        return $this->FIX_ID;
    }

    public function withFIX_ID(string $FIX_ID): static
    {
        $new = clone $this;
        $new->FIX_ID = $FIX_ID;

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

    public function getTYPE_ID(): int
    {
        return $this->TYPE_ID;
    }

    public function withTYPE_ID(int $TYPE_ID): static
    {
        $new = clone $this;
        $new->TYPE_ID = $TYPE_ID;

        return $new;
    }

    public function getSTART(): \DateTimeInterface
    {
        return $this->START;
    }

    public function withSTART(\DateTimeInterface $START): static
    {
        $new = clone $this;
        $new->START = $START;

        return $new;
    }

    public function getEND(): \DateTimeInterface
    {
        return $this->END;
    }

    public function withEND(\DateTimeInterface $END): static
    {
        $new = clone $this;
        $new->END = $END;

        return $new;
    }

    public function getCOMMENT(): ?string
    {
        return $this->COMMENT;
    }

    public function withCOMMENT(?string $COMMENT): static
    {
        $new = clone $this;
        $new->COMMENT = $COMMENT;

        return $new;
    }
}
