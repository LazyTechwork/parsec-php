<?php

namespace LazyTechwork\Parsec\Types;

class ScheduleDay extends BaseObject
{
    private \DateTimeInterface $DATE;

    private int $INDEX;

    private ?ArrayOfTimeInterval $INTERVALS = null;

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

    public function getINDEX(): int
    {
        return $this->INDEX;
    }

    public function withINDEX(int $INDEX): static
    {
        $new = clone $this;
        $new->INDEX = $INDEX;

        return $new;
    }

    public function getINTERVALS(): ?ArrayOfTimeInterval
    {
        return $this->INTERVALS;
    }

    public function withINTERVALS(?ArrayOfTimeInterval $INTERVALS): static
    {
        $new = clone $this;
        $new->INTERVALS = $INTERVALS;

        return $new;
    }
}
