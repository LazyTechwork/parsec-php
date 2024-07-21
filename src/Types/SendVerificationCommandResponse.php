<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SendVerificationCommandResponse implements ResultInterface
{
    private ?BaseResult $SendVerificationCommandResult = null;

    public function getSendVerificationCommandResult(): ?BaseResult
    {
        return $this->SendVerificationCommandResult;
    }

    public function withSendVerificationCommandResult(?BaseResult $SendVerificationCommandResult): static
    {
        $new = clone $this;
        $new->SendVerificationCommandResult = $SendVerificationCommandResult;

        return $new;
    }
}
