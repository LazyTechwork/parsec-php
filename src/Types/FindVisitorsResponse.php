<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class FindVisitorsResponse implements ResultInterface
{
    private ?ArrayOfPerson $FindVisitorsResult = null;

    public function getFindVisitorsResult(): ?ArrayOfPerson
    {
        return $this->FindVisitorsResult;
    }

    public function withFindVisitorsResult(?ArrayOfPerson $FindVisitorsResult): static
    {
        $new = clone $this;
        $new->FindVisitorsResult = $FindVisitorsResult;

        return $new;
    }
}
