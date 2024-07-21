<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfScheduleFix
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\ScheduleFix>|null
     */
    private ?array $ScheduleFix = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\ScheduleFix>|null
     */
    public function getScheduleFix(): ?array
    {
        return $this->ScheduleFix;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\ScheduleFix>|null $ScheduleFix
     */
    public function withScheduleFix(?array $ScheduleFix): static
    {
        $new = clone $this;
        $new->ScheduleFix = $ScheduleFix;

        return $new;
    }
}
