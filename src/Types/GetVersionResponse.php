<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetVersionResponse implements ResultInterface
{
    private ?string $GetVersionResult = null;

    public function getGetVersionResult(): ?string
    {
        return $this->GetVersionResult;
    }

    public function withGetVersionResult(?string $GetVersionResult): static
    {
        $new = clone $this;
        $new->GetVersionResult = $GetVersionResult;

        return $new;
    }
}
