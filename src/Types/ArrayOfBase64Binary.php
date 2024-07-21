<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfBase64Binary
{
    /**
     * @var array<int<0,max>, mixed>|null
     */
    private ?array $base64Binary = null;

    /**
     * @return array<int<0,max>, mixed>|null
     */
    public function getBase64Binary(): ?array
    {
        return $this->base64Binary;
    }

    /**
     * @param array<int<0,max>, mixed>|null $base64Binary
     */
    public function withBase64Binary(?array $base64Binary): static
    {
        $new = clone $this;
        $new->base64Binary = $base64Binary;

        return $new;
    }
}
