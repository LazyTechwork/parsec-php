<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonScheduleFixesResponse implements ResultInterface
{
    private ?ArrayOfPersonScheduleFix $GetPersonScheduleFixesResult = null;

    public function getGetPersonScheduleFixesResult(): ?ArrayOfPersonScheduleFix
    {
        return $this->GetPersonScheduleFixesResult;
    }

    public function withGetPersonScheduleFixesResult(?ArrayOfPersonScheduleFix $GetPersonScheduleFixesResult): static
    {
        $new = clone $this;
        $new->GetPersonScheduleFixesResult = $GetPersonScheduleFixesResult;

        return $new;
    }
}
