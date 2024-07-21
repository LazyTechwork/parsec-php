<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetIdentifierExtraData implements RequestInterface
{
    private string $sessionID;

    private ?string $cardCode = null;

    private ?IdentifierExData $exData = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?string $cardCode, ?IdentifierExData $exData)
    {
        $this->sessionID = $sessionID;
        $this->cardCode = $cardCode;
        $this->exData = $exData;
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

    public function getExData(): ?IdentifierExData
    {
        return $this->exData;
    }

    public function withExData(?IdentifierExData $exData): static
    {
        $new = clone $this;
        $new->exData = $exData;

        return $new;
    }
}
