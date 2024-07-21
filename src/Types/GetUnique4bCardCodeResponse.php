<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetUnique4bCardCodeResponse implements ResultInterface
{
    private ?StringResult $GetUnique4bCardCodeResult = null;

    public function getGetUnique4bCardCodeResult(): ?StringResult
    {
        return $this->GetUnique4bCardCodeResult;
    }

    public function withGetUnique4bCardCodeResult(?StringResult $GetUnique4bCardCodeResult): static
    {
        $new = clone $this;
        $new->GetUnique4bCardCodeResult = $GetUnique4bCardCodeResult;

        return $new;
    }
}
