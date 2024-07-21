<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetDomainsResponse implements ResultInterface
{
    private ?ArrayOfDomain $GetDomainsResult = null;

    public function getGetDomainsResult(): ?ArrayOfDomain
    {
        return $this->GetDomainsResult;
    }

    public function withGetDomainsResult(?ArrayOfDomain $GetDomainsResult): static
    {
        $new = clone $this;
        $new->GetDomainsResult = $GetDomainsResult;

        return $new;
    }
}
