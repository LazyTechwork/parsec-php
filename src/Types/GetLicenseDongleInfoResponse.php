<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetLicenseDongleInfoResponse implements ResultInterface
{
    private ?string $GetLicenseDongleInfoResult = null;

    public function getGetLicenseDongleInfoResult(): ?string
    {
        return $this->GetLicenseDongleInfoResult;
    }

    public function withGetLicenseDongleInfoResult(?string $GetLicenseDongleInfoResult): static
    {
        $new = clone $this;
        $new->GetLicenseDongleInfoResult = $GetLicenseDongleInfoResult;

        return $new;
    }
}
