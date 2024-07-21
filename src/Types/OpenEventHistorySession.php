<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class OpenEventHistorySession implements RequestInterface
{
    private Guid $sessionID;

    private ?EventHistoryQueryParams $parameters = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?EventHistoryQueryParams $parameters)
    {
        $this->sessionID = $sessionID;
        $this->parameters = $parameters;
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
