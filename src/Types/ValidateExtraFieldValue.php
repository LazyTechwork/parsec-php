<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ValidateExtraFieldValue implements RequestInterface
{
    private string $sessionID;

    private ?ExtraFieldValue $value = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?ExtraFieldValue $value)
    {
        $this->sessionID = $sessionID;
        $this->value = $value;
    }

    public function getSessionID(): string
    {
        return $this->sessionID;
    }

    public function withSessionID(string $sessionID): static
    {
        $new = clone $this;
        $new->sessionID = $sessionID;

        return $new;
    }

    public function getValue(): ?ExtraFieldValue
    {
        return $this->value;
    }

    public function withValue(?ExtraFieldValue $value): static
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }
}
