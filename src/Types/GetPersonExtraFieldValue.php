<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetPersonExtraFieldValue implements RequestInterface
{
    private string $sessionID;

    private string $personID;

    private string $templateID;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $personID, string $templateID)
    {
        $this->sessionID = $sessionID;
        $this->personID = $personID;
        $this->templateID = $templateID;
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

    public function getPersonID(): string
    {
        return $this->personID;
    }

    public function withPersonID(string $personID): static
    {
        $new = clone $this;
        $new->personID = $personID;

        return $new;
    }

    public function getTemplateID(): string
    {
        return $this->templateID;
    }

    public function withTemplateID(string $templateID): static
    {
        $new = clone $this;
        $new->templateID = $templateID;

        return $new;
    }
}
