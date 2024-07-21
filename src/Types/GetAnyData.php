<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetAnyData implements RequestInterface
{
    private Guid $sessionID;

    private ?string $data = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?string $data)
    {
        $this->sessionID = $sessionID;
        $this->data = $data;
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

    public function getData(): ?string
    {
        return $this->data;
    }

    public function withData(?string $data): static
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }
}
