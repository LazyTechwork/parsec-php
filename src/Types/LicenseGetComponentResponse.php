<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class LicenseGetComponentResponse implements ResultInterface
{
    private ?StringResult $LicenseGetComponentResult = null;

    public function getLicenseGetComponentResult(): ?StringResult
    {
        return $this->LicenseGetComponentResult;
    }

    public function withLicenseGetComponentResult(?StringResult $LicenseGetComponentResult): static
    {
        $new = clone $this;
        $new->LicenseGetComponentResult = $LicenseGetComponentResult;

        return $new;
    }
}
