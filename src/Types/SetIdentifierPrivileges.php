<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetIdentifierPrivileges implements RequestInterface
{
    private Guid $sessionID;

    private ?string $cardCode = null;

    private int $privilegesMask;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?string $cardCode, int $privilegesMask)
    {
        $this->sessionID = $sessionID;
        $this->cardCode = $cardCode;
        $this->privilegesMask = $privilegesMask;
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

    public function getPrivilegesMask(): int
    {
        return $this->privilegesMask;
    }

    public function withPrivilegesMask(int $privilegesMask): static
    {
        $new = clone $this;
        $new->privilegesMask = $privilegesMask;

        return $new;
    }
}
