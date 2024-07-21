<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteIdentifier implements RequestInterface
{
    private Guid $sessionID;

    private ?string $Code = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?string $Code)
    {
        $this->sessionID = $sessionID;
        $this->Code = $Code;
    }

    public function getSessionID(): Guid
    {
        return $this->sessionID;
    }

    public function withSessionID(Guid $sessionID): static
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
