<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AddPersonScheduleFix implements RequestInterface
{
    private string $sessionID;

    private ?PersonScheduleFix $fix = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?PersonScheduleFix $fix)
    {
        $this->sessionID = $sessionID;
        $this->fix = $fix;
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

    public function getFix(): ?PersonScheduleFix
    {
        return $this->fix;
    }

    public function withFix(?PersonScheduleFix $fix): static
    {
        $new = clone $this;
        $new->fix = $fix;

        return $new;
    }
}
