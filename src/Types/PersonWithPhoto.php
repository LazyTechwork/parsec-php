<?php

namespace LazyTechwork\Parsec\Types;

class PersonWithPhoto extends Person
{
    /**
     * @var mixed|null
     */
    private mixed $PHOTO = null;

    /**
     * @return mixed|null
     */
    public function getPHOTO(): mixed
    {
        return $this->PHOTO;
    }

    /**
     * @param mixed|null $PHOTO
     */
    public function withPHOTO(mixed $PHOTO): static
    {
        $new = clone $this;
        $new->PHOTO = $PHOTO;

        return $new;
    }
}
