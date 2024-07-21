<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfPerson
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\Person>|null
     */
    private ?array $Person = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\Person>|null
     */
    public function getPerson(): ?array
    {
        return $this->Person;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\Person>|null $Person
     */
    public function withPerson(?array $Person): static
    {
        $new = clone $this;
        $new->Person = $Person;

        return $new;
    }
}
