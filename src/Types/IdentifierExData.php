<?php

namespace LazyTechwork\Parsec\Types;

class IdentifierExData extends BaseObject
{
    private Guid $PASSAGE_ROLE_ID;

    private int $ENTRY_LIMIT;

    private Guid $OWNED_COMPONENT_ID;

    public function getPASSAGE_ROLE_ID(): Guid
    {
        return $this->PASSAGE_ROLE_ID;
    }

    public function withPASSAGE_ROLE_ID(Guid $PASSAGE_ROLE_ID): static
    {
        $new = clone $this;
        $new->PASSAGE_ROLE_ID = $PASSAGE_ROLE_ID;

        return $new;
    }

    public function getENTRY_LIMIT(): int
    {
        return $this->ENTRY_LIMIT;
    }

    public function withENTRY_LIMIT(int $ENTRY_LIMIT): static
    {
        $new = clone $this;
        $new->ENTRY_LIMIT = $ENTRY_LIMIT;

        return $new;
    }

    public function getOWNED_COMPONENT_ID(): Guid
    {
        return $this->OWNED_COMPONENT_ID;
    }

    public function withOWNED_COMPONENT_ID(Guid $OWNED_COMPONENT_ID): static
    {
        $new = clone $this;
        $new->OWNED_COMPONENT_ID = $OWNED_COMPONENT_ID;

        return $new;
    }
}
