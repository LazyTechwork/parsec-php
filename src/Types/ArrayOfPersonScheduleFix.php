<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfPersonScheduleFix
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\PersonScheduleFix>|null
     */
    private ?array $PersonScheduleFix = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\PersonScheduleFix>|null
     */
    public function getPersonScheduleFix(): ?array
    {
        return $this->PersonScheduleFix;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\PersonScheduleFix>|null $PersonScheduleFix
     */
    public function withPersonScheduleFix(?array $PersonScheduleFix): static
    {
        $new = clone $this;
        $new->PersonScheduleFix = $PersonScheduleFix;

        return $new;
    }
}
