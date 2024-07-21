<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateAdvancedParsecQRCode implements RequestInterface
{
    private string $sessionID;

    private ?QRAdvancedData $qrData = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?QRAdvancedData $qrData)
    {
        $this->sessionID = $sessionID;
        $this->qrData = $qrData;
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

    public function getQrData(): ?QRAdvancedData
    {
        return $this->qrData;
    }

    public function withQrData(?QRAdvancedData $qrData): static
    {
        $new = clone $this;
        $new->qrData = $qrData;

        return $new;
    }
}
