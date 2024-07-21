<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class LicenseRegisterFeatureObjectResponse implements ResultInterface
{
    private ?BaseResult $LicenseRegisterFeatureObjectResult = null;

    public function getLicenseRegisterFeatureObjectResult(): ?BaseResult
    {
        return $this->LicenseRegisterFeatureObjectResult;
    }

    public function withLicenseRegisterFeatureObjectResult(?BaseResult $LicenseRegisterFeatureObjectResult): static
    {
        $new = clone $this;
        $new->LicenseRegisterFeatureObjectResult = $LicenseRegisterFeatureObjectResult;

        return $new;
    }
}
