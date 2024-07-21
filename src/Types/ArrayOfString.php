<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfString
{
    /**
     * @var array<int<0,max>, string>|null
     */
    private ?array $string = null;

    /**
     * @return array<int<0,max>, string>|null
     */
    public function getString(): ?array
    {
        return $this->string;
    }

    /**
     * @param array<int<0,max>, string>|null $string
     */
    public function withString(?array $string): static
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}
