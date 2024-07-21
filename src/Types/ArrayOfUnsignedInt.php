<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfUnsignedInt
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\UnsignedLong>
     */
    private array $unsignedInt;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\UnsignedLong>
     */
    public function getUnsignedInt(): array
    {
        return $this->unsignedInt;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\UnsignedLong> $unsignedInt
     */
    public function withUnsignedInt(array $unsignedInt): static
    {
        $new = clone $this;
        $new->unsignedInt = $unsignedInt;

        return $new;
    }
}
