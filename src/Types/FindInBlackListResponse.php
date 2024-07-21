<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class FindInBlackListResponse implements ResultInterface
{
    private ?ArrayOfPerson $FindInBlackListResult = null;

    public function getFindInBlackListResult(): ?ArrayOfPerson
    {
        return $this->FindInBlackListResult;
    }

    public function withFindInBlackListResult(?ArrayOfPerson $FindInBlackListResult): static
    {
        $new = clone $this;
        $new->FindInBlackListResult = $FindInBlackListResult;

        return $new;
    }
}
