<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetPersonExtraFieldValue implements RequestInterface
{
    private Guid $sessionID;

    private Guid $personID;

    private Guid $templateID;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $personID, Guid $templateID)
    {
        $this->sessionID = $sessionID;
        $this->personID = $personID;
        $this->templateID = $templateID;
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

    public function getPersonID(): Guid
    {
        return $this->personID;
    }

    public function withPersonID(Guid $personID): static
    {
        $new = clone $this;
        $new->personID = $personID;

        return $new;
    }

    public function getTemplateID(): Guid
    {
        return $this->templateID;
    }

    public function withTemplateID(Guid $templateID): static
    {
        $new = clone $this;
        $new->templateID = $templateID;

        return $new;
    }
}
