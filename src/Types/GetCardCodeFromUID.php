<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetCardCodeFromUID implements RequestInterface
{
    private string $sessionID;

    private ?string $UID = null;

    private bool $reverseByteOrder;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?string $UID, bool $reverseByteOrder)
    {
        $this->sessionID = $sessionID;
        $this->UID = $UID;
        $this->reverseByteOrder = $reverseByteOrder;
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

    public function getUID(): ?string
    {
        return $this->UID;
    }

    public function withUID(?string $UID): static
    {
        $new = clone $this;
        $new->UID = $UID;

        return $new;
    }

    public function isReverseByteOrder(): bool
    {
        return $this->reverseByteOrder;
    }

    public function withReverseByteOrder(bool $reverseByteOrder): static
    {
        $new = clone $this;
        $new->reverseByteOrder = $reverseByteOrder;

        return $new;
    }
}