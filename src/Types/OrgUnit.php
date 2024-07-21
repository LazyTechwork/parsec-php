<?php

namespace LazyTechwork\Parsec\Types;

class OrgUnit extends BaseOrgUnit
{
    private Guid $PARENT_ID;

    public function getPARENT_ID(): Guid
    {
        return $this->PARENT_ID;
    }

    public function withPARENT_ID(Guid $PARENT_ID): static
    {
        $new = clone $this;
        $new->PARENT_ID = $PARENT_ID;

        return $new;
    }
}
