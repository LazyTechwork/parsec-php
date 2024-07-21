<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class FindPeopleResponse implements ResultInterface
{
    private ?ArrayOfPerson $FindPeopleResult = null;

    public function getFindPeopleResult(): ?ArrayOfPerson
    {
        return $this->FindPeopleResult;
    }

    public function withFindPeopleResult(?ArrayOfPerson $FindPeopleResult): static
    {
        $new = clone $this;
        $new->FindPeopleResult = $FindPeopleResult;

        return $new;
    }
}
