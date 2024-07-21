<?php

namespace LazyTechwork\Parsec\Types;

class Person extends BasePerson
{
    private Guid $ORG_ID;

    public function getORG_ID(): Guid
    {
        return $this->ORG_ID;
    }

    public function withORG_ID(Guid $ORG_ID): static
    {
        $new = clone $this;
        $new->ORG_ID = $ORG_ID;

        return $new;
    }
}
