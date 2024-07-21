<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SavePersonScheduleFix implements RequestInterface
{
    private Guid $sessionID;

    private ?PersonScheduleFix $fix = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?PersonScheduleFix $fix)
    {
        $this->sessionID = $sessionID;
        $this->fix = $fix;
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
