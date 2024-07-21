<?php

namespace LazyTechwork\Parsec\Types;

class IdentifierTemp extends Identifier
{
    private \DateTimeInterface $VALID_FROM;

    private \DateTimeInterface $VALID_TO;

    public function getVALID_FROM(): \DateTimeInterface
    {
        return $this->VALID_FROM;
    }

    public function withVALID_FROM(\DateTimeInterface $VALID_FROM): static
    {
        $new = clone $this;
        $new->VALID_FROM = $VALID_FROM;

        return $new;
    }

    public function getVALID_TO(): \DateTimeInterface
    {
        return $this->VALID_TO;
    }

    public function withVALID_TO(\DateTimeInterface $VALID_TO): static
    {
        $new = clone $this;
        $new->VALID_TO = $VALID_TO;

        return $new;
    }
}
