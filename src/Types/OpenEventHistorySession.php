<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class OpenEventHistorySession implements RequestInterface
{
    private string $sessionID;

    private ?EventHistoryQueryParams $parameters = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?EventHistoryQueryParams $parameters)
    {
        $this->sessionID = $sessionID;
        $this->parameters = $parameters;
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

    public function getParameters(): ?EventHistoryQueryParams
    {
        return $this->parameters;
    }

    public function withParameters(?EventHistoryQueryParams $parameters): static
    {
        $new = clone $this;
        $new->parameters = $parameters;

        return $new;
    }
}
