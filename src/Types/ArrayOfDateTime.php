<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfDateTime
{
    /**
     * @var array<int<0,max>, \DateTimeInterface>
     */
    private array $dateTime;

    /**
     * @return array<int<0,max>, \DateTimeInterface>
     */
    public function getDateTime(): array
    {
        return $this->dateTime;
    }

    /**
     * @param array<int<0,max>, \DateTimeInterface> $dateTime
     */
    public function withDateTime(array $dateTime): static
    {
        $new = clone $this;
        $new->dateTime = $dateTime;

        return $new;
    }
}
