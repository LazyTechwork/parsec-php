<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SavePersonResponse implements ResultInterface
{
    private ?BaseResult $SavePersonResult = null;

    public function getSavePersonResult(): ?BaseResult
    {
        return $this->SavePersonResult;
    }

    public function withSavePersonResult(?BaseResult $SavePersonResult): static
    {
        $new = clone $this;
        $new->SavePersonResult = $SavePersonResult;

        return $new;
    }
}
