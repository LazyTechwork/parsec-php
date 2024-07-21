<?php

namespace LazyTechwork\Parsec\Types;

class SessionResult extends BaseResult
{
    private ?Session $Value = null;

    public function getValue(): ?Session
    {
        return $this->Value;
    }

    public function withValue(?Session $Value): static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
