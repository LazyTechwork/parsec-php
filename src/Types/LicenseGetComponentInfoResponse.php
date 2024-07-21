<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class LicenseGetComponentInfoResponse implements ResultInterface
{
    private ?StringResult $LicenseGetComponentInfoResult = null;

    public function getLicenseGetComponentInfoResult(): ?StringResult
    {
        return $this->LicenseGetComponentInfoResult;
    }

    public function withLicenseGetComponentInfoResult(?StringResult $LicenseGetComponentInfoResult): static
    {
        $new = clone $this;
        $new->LicenseGetComponentInfoResult = $LicenseGetComponentInfoResult;

        return $new;
    }
}
