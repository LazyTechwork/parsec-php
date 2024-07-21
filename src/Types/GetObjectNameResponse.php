<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetObjectNameResponse implements ResultInterface
{
    private ?StringResult $GetObjectNameResult = null;

    public function getGetObjectNameResult(): ?StringResult
    {
        return $this->GetObjectNameResult;
    }

    public function withGetObjectNameResult(?StringResult $GetObjectNameResult): static
    {
        $new = clone $this;
        $new->GetObjectNameResult = $GetObjectNameResult;

        return $new;
    }
}
