<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonsDeletedAfterResponse implements ResultInterface
{
    private ?ArrayOfGuid $GetPersonsDeletedAfterResult = null;

    public function getGetPersonsDeletedAfterResult(): ?ArrayOfGuid
    {
        return $this->GetPersonsDeletedAfterResult;
    }

    public function withGetPersonsDeletedAfterResult(?ArrayOfGuid $GetPersonsDeletedAfterResult): static
    {
        $new = clone $this;
        $new->GetPersonsDeletedAfterResult = $GetPersonsDeletedAfterResult;

        return $new;
    }
}
