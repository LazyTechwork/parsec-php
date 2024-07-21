<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfTimeInterval
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\TimeInterval>|null
     */
    private ?array $TimeInterval = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\TimeInterval>|null
     */
    public function getTimeInterval(): ?array
    {
        return $this->TimeInterval;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\TimeInterval>|null $TimeInterval
     */
    public function withTimeInterval(?array $TimeInterval): static
    {
        $new = clone $this;
        $new->TimeInterval = $TimeInterval;

        return $new;
    }
}
