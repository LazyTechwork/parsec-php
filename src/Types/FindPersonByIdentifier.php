<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class FindPersonByIdentifier implements RequestInterface
{
    private string $sessionID;

    private ?string $cardCode = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?string $cardCode)
    {
        $this->sessionID = $sessionID;
        $this->cardCode = $cardCode;
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

    public function getCardCode(): ?string
    {
        return $this->cardCode;
    }

    public function withCardCode(?string $cardCode): static
    {
        $new = clone $this;
        $new->cardCode = $cardCode;

        return $new;
    }
}
