<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class FindPersonByIdentifierResponse implements ResultInterface
{
    private ?Person $FindPersonByIdentifierResult = null;

    public function getFindPersonByIdentifierResult(): ?Person
    {
        return $this->FindPersonByIdentifierResult;
    }

    public function withFindPersonByIdentifierResult(?Person $FindPersonByIdentifierResult): static
    {
        $new = clone $this;
        $new->FindPersonByIdentifierResult = $FindPersonByIdentifierResult;

        return $new;
    }
}
