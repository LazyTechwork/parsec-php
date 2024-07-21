<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfVisitorRequest
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\VisitorRequest>|null
     */
    private ?array $VisitorRequest = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\VisitorRequest>|null
     */
    public function getVisitorRequest(): ?array
    {
        return $this->VisitorRequest;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\VisitorRequest>|null $VisitorRequest
     */
    public function withVisitorRequest(?array $VisitorRequest): static
    {
        $new = clone $this;
        $new->VisitorRequest = $VisitorRequest;

        return $new;
    }
}
