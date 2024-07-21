<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfEvent
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\Event>|null
     */
    private ?array $Event = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\Event>|null
     */
    public function getEvent(): ?array
    {
        return $this->Event;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\Event>|null $Event
     */
    public function withEvent(?array $Event): static
    {
        $new = clone $this;
        $new->Event = $Event;

        return $new;
    }
}
