<?php

namespace LazyTechwork\Parsec\Types;

class AccessSchedule extends Schedule
{
    private ?string $DESC = null;

    private bool $IS_WEEK;

    private int $HOLIDAYS_ACTION;

    public function getDESC(): ?string
    {
        return $this->DESC;
    }

    public function withDESC(?string $DESC): static
    {
        $new = clone $this;
        $new->DESC = $DESC;

        return $new;
    }

    public function isIS_WEEK(): bool
    {
        return $this->IS_WEEK;
    }

    public function withIS_WEEK(bool $IS_WEEK): static
    {
        $new = clone $this;
        $new->IS_WEEK = $IS_WEEK;

        return $new;
    }

    public function getHOLIDAYS_ACTION(): int
    {
        return $this->HOLIDAYS_ACTION;
    }

    public function withHOLIDAYS_ACTION(int $HOLIDAYS_ACTION): static
    {
        $new = clone $this;
        $new->HOLIDAYS_ACTION = $HOLIDAYS_ACTION;

        return $new;
    }
}
