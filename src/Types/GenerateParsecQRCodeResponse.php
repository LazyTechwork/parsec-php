<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateParsecQRCodeResponse implements ResultInterface
{
    private ?StringResult $GenerateParsecQRCodeResult = null;

    public function getGenerateParsecQRCodeResult(): ?StringResult
    {
        return $this->GenerateParsecQRCodeResult;
    }

    public function withGenerateParsecQRCodeResult(?StringResult $GenerateParsecQRCodeResult): static
    {
        $new = clone $this;
        $new->GenerateParsecQRCodeResult = $GenerateParsecQRCodeResult;

        return $new;
    }
}
