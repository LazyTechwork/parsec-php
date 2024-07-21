<?php

namespace LazyTechwork\Parsec\Types;

class BaseResult
{
    private int $Result;

    private ?string $ErrorMessage = null;

    public function getResult(): int
    {
        return $this->Result;
    }

    public function withResult(int $Result): static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    public function getErrorMessage(): ?string
    {
        return $this->ErrorMessage;
    }

    public function withErrorMessage(?string $ErrorMessage): static
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }
}
