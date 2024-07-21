<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfPersonExtraFieldTemplate
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\PersonExtraFieldTemplate>|null
     */
    private ?array $PersonExtraFieldTemplate = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\PersonExtraFieldTemplate>|null
     */
    public function getPersonExtraFieldTemplate(): ?array
    {
        return $this->PersonExtraFieldTemplate;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\PersonExtraFieldTemplate>|null $PersonExtraFieldTemplate
     */
    public function withPersonExtraFieldTemplate(?array $PersonExtraFieldTemplate): static
    {
        $new = clone $this;
        $new->PersonExtraFieldTemplate = $PersonExtraFieldTemplate;

        return $new;
    }
}
