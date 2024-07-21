<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class FindPeople implements RequestInterface
{
    private Guid $sessionID;

    private ?string $lastname = null;

    private ?string $firstname = null;

    private ?string $middlename = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, ?string $lastname, ?string $firstname, ?string $middlename)
    {
        $this->sessionID = $sessionID;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->middlename = $middlename;
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

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function withLastname(?string $lastname): static
    {
        $new = clone $this;
        $new->lastname = $lastname;

        return $new;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function withFirstname(?string $firstname): static
    {
        $new = clone $this;
        $new->firstname = $firstname;

        return $new;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function withMiddlename(?string $middlename): static
    {
        $new = clone $this;
        $new->middlename = $middlename;

        return $new;
    }
}
