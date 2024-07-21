<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class OpenSessionResponse implements ResultInterface
{
    private ?SessionResult $OpenSessionResult = null;

    public function getOpenSessionResult(): ?SessionResult
    {
        return $this->OpenSessionResult;
    }

    public function withOpenSessionResult(?SessionResult $OpenSessionResult): static
    {
        $new = clone $this;
        $new->OpenSessionResult = $OpenSessionResult;

        return $new;
    }
}
