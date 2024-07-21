<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfSchedule
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\Schedule>|null
     */
    private ?array $Schedule = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\Schedule>|null
     */
    public function getSchedule(): ?array
    {
        return $this->Schedule;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\Schedule>|null $Schedule
     */
    public function withSchedule(?array $Schedule): static
    {
        $new = clone $this;
        $new->Schedule = $Schedule;

        return $new;
    }
}
