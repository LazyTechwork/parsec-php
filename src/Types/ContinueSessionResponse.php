<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ContinueSessionResponse implements ResultInterface
{
    private int $ContinueSessionResult;

    public function getContinueSessionResult(): int
    {
        return $this->ContinueSessionResult;
    }

    public function withContinueSessionResult(int $ContinueSessionResult): static
    {
        $new = clone $this;
        $new->ContinueSessionResult = $ContinueSessionResult;

        return $new;
    }
}
