<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class OpenPersonEditingSessionResponse implements ResultInterface
{
    private ?GuidResult $OpenPersonEditingSessionResult = null;

    public function getOpenPersonEditingSessionResult(): ?GuidResult
    {
        return $this->OpenPersonEditingSessionResult;
    }

    public function withOpenPersonEditingSessionResult(?GuidResult $OpenPersonEditingSessionResult): static
    {
        $new = clone $this;
        $new->OpenPersonEditingSessionResult = $OpenPersonEditingSessionResult;

        return $new;
    }
}
