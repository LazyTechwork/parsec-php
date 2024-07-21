<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteIdentifier implements RequestInterface
{
    private string $sessionID;

    private ?string $Code = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?string $Code)
    {
        $this->sessionID = $sessionID;
        $this->Code = $Code;
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

    public function getCode(): ?string
    {
        return $this->Code;
    }

    public function withCode(?string $Code): static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }
}
