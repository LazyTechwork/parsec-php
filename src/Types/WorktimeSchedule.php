<?php

namespace LazyTechwork\Parsec\Types;

class WorktimeSchedule extends AccessSchedule
{
    private int $HOURS_PER_WEEK;

    private int $HOURS_PER_DAY;

    public function getHOURS_PER_WEEK(): int
    {
        return $this->HOURS_PER_WEEK;
    }

    public function withHOURS_PER_WEEK(int $HOURS_PER_WEEK): static
    {
        $new = clone $this;
        $new->HOURS_PER_WEEK = $HOURS_PER_WEEK;

        return $new;
    }

    public function getHOURS_PER_DAY(): int
    {
        return $this->HOURS_PER_DAY;
    }

    public function withHOURS_PER_DAY(int $HOURS_PER_DAY): static
    {
        $new = clone $this;
        $new->HOURS_PER_DAY = $HOURS_PER_DAY;

        return $new;
    }
}
