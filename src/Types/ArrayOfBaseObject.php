<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfBaseObject
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\BaseObject>|null
     */
    private ?array $BaseObject = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\BaseObject>|null
     */
    public function getBaseObject(): ?array
    {
        return $this->BaseObject;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\BaseObject>|null $BaseObject
     */
    public function withBaseObject(?array $BaseObject): static
    {
        $new = clone $this;
        $new->BaseObject = $BaseObject;

        return $new;
    }
}
