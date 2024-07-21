<?php

namespace LazyTechwork\Parsec\Types;

class TimeInterval extends BaseObject
{
    private \DateTimeInterface $START;

    private \DateTimeInterface $END;

    public function getSTART(): \DateTimeInterface
    {
        return $this->START;
    }

    public function withSTART(\DateTimeInterface $START): static
    {
        $new = clone $this;
        $new->START = $START;

        return $new;
    }

    public function getEND(): \DateTimeInterface
    {
        return $this->END;
    }

    public function withEND(\DateTimeInterface $END): static
    {
        $new = clone $this;
        $new->END = $END;

        return $new;
    }
}
