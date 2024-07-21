<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfHoliday
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\Holiday>|null
     */
    private ?array $Holiday = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\Holiday>|null
     */
    public function getHoliday(): ?array
    {
        return $this->Holiday;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\Holiday>|null $Holiday
     */
    public function withHoliday(?array $Holiday): static
    {
        $new = clone $this;
        $new->Holiday = $Holiday;

        return $new;
    }
}
