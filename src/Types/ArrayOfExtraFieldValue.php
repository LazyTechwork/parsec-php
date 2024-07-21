<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfExtraFieldValue
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\ExtraFieldValue>|null
     */
    private ?array $ExtraFieldValue = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\ExtraFieldValue>|null
     */
    public function getExtraFieldValue(): ?array
    {
        return $this->ExtraFieldValue;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\ExtraFieldValue>|null $ExtraFieldValue
     */
    public function withExtraFieldValue(?array $ExtraFieldValue): static
    {
        $new = clone $this;
        $new->ExtraFieldValue = $ExtraFieldValue;

        return $new;
    }
}
