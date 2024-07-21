<?php

namespace LazyTechwork\Parsec\Types;

class Person extends BasePerson
{
    private string $ORG_ID;

    public function getORG_ID(): string
    {
        return $this->ORG_ID;
    }

    public function withORG_ID(string $ORG_ID): static
    {
        $new = clone $this;
        $new->ORG_ID = $ORG_ID;

        return $new;
    }
}
