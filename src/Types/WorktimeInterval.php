<?php

namespace LazyTechwork\Parsec\Types;

class WorktimeInterval extends TimeInterval
{
    private int $TYPE;

    public function getTYPE(): int
    {
        return $this->TYPE;
    }

    public function withTYPE(int $TYPE): static
    {
        $new = clone $this;
        $new->TYPE = $TYPE;

        return $new;
    }
}
