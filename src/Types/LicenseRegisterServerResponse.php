<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class LicenseRegisterServerResponse implements ResultInterface
{
    private ?BaseResult $LicenseRegisterServerResult = null;

    public function getLicenseRegisterServerResult(): ?BaseResult
    {
        return $this->LicenseRegisterServerResult;
    }

    public function withLicenseRegisterServerResult(?BaseResult $LicenseRegisterServerResult): static
    {
        $new = clone $this;
        $new->LicenseRegisterServerResult = $LicenseRegisterServerResult;

        return $new;
    }
}
