<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateAdvancedParsecQRCode implements RequestInterface
{
    private Guid $sessionID;

    private ?QRAdvancedData $qrData = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?QRAdvancedData $qrData)
    {
        $this->sessionID = $sessionID;
        $this->qrData = $qrData;
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
