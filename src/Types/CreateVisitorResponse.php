<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class CreateVisitorResponse implements ResultInterface
{
    private ?GuidResult $CreateVisitorResult = null;

    public function getCreateVisitorResult(): ?GuidResult
    {
        return $this->CreateVisitorResult;
    }

    public function withCreateVisitorResult(?GuidResult $CreateVisitorResult): static
    {
        $new = clone $this;
        $new->CreateVisitorResult = $CreateVisitorResult;

        return $new;
    }
}
