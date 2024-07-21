<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfGuid
{
    /**
     * @var array<int<0,max>, mixed>
     */
    private array $guid;

    /**
     * @return array<int<0,max>, mixed>
     */
    public function getGuid(): array
    {
        return $this->guid;
    }

    /**
     * @param array<int<0,max>, mixed> $guid
     */
    public function withGuid(array $guid): static
    {
        $new = clone $this;
        $new->guid = $guid;

        return $new;
    }
}
