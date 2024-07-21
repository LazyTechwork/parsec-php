<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CreateVisitorRequest implements RequestInterface
{
    private Guid $sessionID;

    private ?VisitorRequest $request = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?VisitorRequest $request)
    {
        $this->sessionID = $sessionID;
        $this->request = $request;
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

    public function getRequest(): ?VisitorRequest
    {
        return $this->request;
    }

    public function withRequest(?VisitorRequest $request): static
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}
