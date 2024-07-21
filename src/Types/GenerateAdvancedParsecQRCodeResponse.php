<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateAdvancedParsecQRCodeResponse implements ResultInterface
{
    private ?StringResult $GenerateAdvancedParsecQRCodeResult = null;

    public function getGenerateAdvancedParsecQRCodeResult(): ?StringResult
    {
        return $this->GenerateAdvancedParsecQRCodeResult;
    }

    public function withGenerateAdvancedParsecQRCodeResult(?StringResult $GenerateAdvancedParsecQRCodeResult): static
    {
        $new = clone $this;
        $new->GenerateAdvancedParsecQRCodeResult = $GenerateAdvancedParsecQRCodeResult;

        return $new;
    }
}
