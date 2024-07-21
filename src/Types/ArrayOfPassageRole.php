<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfPassageRole
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\PassageRole>|null
     */
    private ?array $PassageRole = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\PassageRole>|null
     */
    public function getPassageRole(): ?array
    {
        return $this->PassageRole;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\PassageRole>|null $PassageRole
     */
    public function withPassageRole(?array $PassageRole): static
    {
        $new = clone $this;
        $new->PassageRole = $PassageRole;

        return $new;
    }
}
