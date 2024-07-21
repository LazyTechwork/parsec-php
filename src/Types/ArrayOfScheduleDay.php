<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfScheduleDay
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\ScheduleDay>|null
     */
    private ?array $ScheduleDay = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\ScheduleDay>|null
     */
    public function getScheduleDay(): ?array
    {
        return $this->ScheduleDay;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\ScheduleDay>|null $ScheduleDay
     */
    public function withScheduleDay(?array $ScheduleDay): static
    {
        $new = clone $this;
        $new->ScheduleDay = $ScheduleDay;

        return $new;
    }
}
