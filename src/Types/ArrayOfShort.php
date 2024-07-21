<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfShort
{
    /**
     * @var array<int<0,max>, int>
     */
    private array $short;

    /**
     * @return array<int<0,max>, int>
     */
    public function getShort(): array
    {
        return $this->short;
    }

    /**
     * @param array<int<0,max>, int> $short
     */
    public function withShort(array $short): static
    {
        $new = clone $this;
        $new->short = $short;

        return $new;
    }
}
