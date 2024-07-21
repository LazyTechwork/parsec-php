<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class PersonSearchResponse implements ResultInterface
{
    private ?ArrayOfPerson $PersonSearchResult = null;

    public function getPersonSearchResult(): ?ArrayOfPerson
    {
        return $this->PersonSearchResult;
    }

    public function withPersonSearchResult(?ArrayOfPerson $PersonSearchResult): static
    {
        $new = clone $this;
        $new->PersonSearchResult = $PersonSearchResult;

        return $new;
    }
}
