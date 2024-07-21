<?php

namespace LazyTechwork\Parsec\Types;

class VisitorRequest
{
    private string $ID;

    private int $NUMBER;

    private \DateTimeInterface $DATE;

    private string $ORGUNIT_ID;

    private string $PERSON_ID;

    private ?string $PERSON_INFO = null;

    private ?string $PURPOSE = null;

    private int $STATUS;

    private \DateTimeInterface $ADMIT_START;

    private \DateTimeInterface $ADMIT_END;

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

    public function getNUMBER(): int
    {
        return $this->NUMBER;
    }

    public function withNUMBER(int $NUMBER): static
    {
        $new = clone $this;
        $new->NUMBER = $NUMBER;

        return $new;
    }

    public function getDATE(): \DateTimeInterface
    {
        return $this->DATE;
    }

    public function withDATE(\DateTimeInterface $DATE): static
    {
        $new = clone $this;
        $new->DATE = $DATE;

        return $new;
    }

    public function getORGUNIT_ID(): string
    {
        return $this->ORGUNIT_ID;
    }

    public function withORGUNIT_ID(string $ORGUNIT_ID): static
    {
        $new = clone $this;
        $new->ORGUNIT_ID = $ORGUNIT_ID;

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

    public function getPERSON_INFO(): ?string
    {
        return $this->PERSON_INFO;
    }

    public function withPERSON_INFO(?string $PERSON_INFO): static
    {
        $new = clone $this;
        $new->PERSON_INFO = $PERSON_INFO;

        return $new;
    }

    public function getPURPOSE(): ?string
    {
        return $this->PURPOSE;
    }

    public function withPURPOSE(?string $PURPOSE): static
    {
        $new = clone $this;
        $new->PURPOSE = $PURPOSE;

        return $new;
    }

    public function getSTATUS(): int
    {
        return $this->STATUS;
    }

    public function withSTATUS(int $STATUS): static
    {
        $new = clone $this;
        $new->STATUS = $STATUS;

        return $new;
    }

    public function getADMIT_START(): \DateTimeInterface
    {
        return $this->ADMIT_START;
    }

    public function withADMIT_START(\DateTimeInterface $ADMIT_START): static
    {
        $new = clone $this;
        $new->ADMIT_START = $ADMIT_START;

        return $new;
    }

    public function getADMIT_END(): \DateTimeInterface
    {
        return $this->ADMIT_END;
    }

    public function withADMIT_END(\DateTimeInterface $ADMIT_END): static
    {
        $new = clone $this;
        $new->ADMIT_END = $ADMIT_END;

        return $new;
    }
}
