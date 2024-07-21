<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetBlackListResponse implements ResultInterface
{
    private ?ArrayOfPerson $GetBlackListResult = null;

    public function getGetBlackListResult(): ?ArrayOfPerson
    {
        return $this->GetBlackListResult;
    }

    public function withGetBlackListResult(?ArrayOfPerson $GetBlackListResult): static
    {
        $new = clone $this;
        $new->GetBlackListResult = $GetBlackListResult;

        return $new;
    }
}
