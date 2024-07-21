<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfPersonWithPhoto
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\PersonWithPhoto>|null
     */
    private ?array $PersonWithPhoto = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\PersonWithPhoto>|null
     */
    public function getPersonWithPhoto(): ?array
    {
        return $this->PersonWithPhoto;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\PersonWithPhoto>|null $PersonWithPhoto
     */
    public function withPersonWithPhoto(?array $PersonWithPhoto): static
    {
        $new = clone $this;
        $new->PersonWithPhoto = $PersonWithPhoto;

        return $new;
    }
}
