<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetIdentifierExtraData implements RequestInterface
{
    private Guid $sessionID;

    private ?string $cardCode = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?string $cardCode)
    {
        $this->sessionID = $sessionID;
        $this->cardCode = $cardCode;
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
