<?php

namespace LazyTechwork\Parsec\Types;

class EventsHistoryResult extends BaseResult
{
    private ?EventsHistory $Value = null;

    public function getValue(): ?EventsHistory
    {
        return $this->Value;
    }

    public function withValue(?EventsHistory $Value): static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}
