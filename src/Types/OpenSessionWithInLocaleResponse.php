<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class OpenSessionWithInLocaleResponse implements ResultInterface
{
    private ?SessionResult $OpenSessionWithInLocaleResult = null;

    public function getOpenSessionWithInLocaleResult(): ?SessionResult
    {
        return $this->OpenSessionWithInLocaleResult;
    }

    public function withOpenSessionWithInLocaleResult(?SessionResult $OpenSessionWithInLocaleResult): static
    {
        $new = clone $this;
        $new->OpenSessionWithInLocaleResult = $OpenSessionWithInLocaleResult;

        return $new;
    }
}
