<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonsChangedAfterResponse implements ResultInterface
{
    private ?ArrayOfPerson $GetPersonsChangedAfterResult = null;

    public function getGetPersonsChangedAfterResult(): ?ArrayOfPerson
    {
        return $this->GetPersonsChangedAfterResult;
    }

    public function withGetPersonsChangedAfterResult(?ArrayOfPerson $GetPersonsChangedAfterResult): static
    {
        $new = clone $this;
        $new->GetPersonsChangedAfterResult = $GetPersonsChangedAfterResult;

        return $new;
    }
}
