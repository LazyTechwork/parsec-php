<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SendHardwareCommandResponse implements ResultInterface
{
    private ?BaseResult $SendHardwareCommandResult = null;

    public function getSendHardwareCommandResult(): ?BaseResult
    {
        return $this->SendHardwareCommandResult;
    }

    public function withSendHardwareCommandResult(?BaseResult $SendHardwareCommandResult): static
    {
        $new = clone $this;
        $new->SendHardwareCommandResult = $SendHardwareCommandResult;

        return $new;
    }
}
