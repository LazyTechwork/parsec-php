<?php

namespace LazyTechwork\Parsec\Types;

class ScheduleFix extends ScheduleDay
{
    private int $ACTION;

    public function getACTION(): int
    {
        return $this->ACTION;
    }

    public function withACTION(int $ACTION): static
    {
        $new = clone $this;
        $new->ACTION = $ACTION;

        return $new;
    }
}
