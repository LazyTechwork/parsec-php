<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfAnyType
{
    /**
     * @var array<int<0,max>, mixed>|null
     */
    private ?array $anyType = null;

    /**
     * @return array<int<0,max>, mixed>|null
     */
    public function getAnyType(): ?array
    {
        return $this->anyType;
    }

    /**
     * @param array<int<0,max>, mixed>|null $anyType
     */
    public function withAnyType(?array $anyType): static
    {
        $new = clone $this;
        $new->anyType = $anyType;

        return $new;
    }
}
