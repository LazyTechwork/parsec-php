<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SavePerson implements RequestInterface
{
    private Guid $personEditSessionID;

    private ?BasePerson $person = null;

    /**
     * Constructor.
     */
    public function __construct(Guid $personEditSessionID, ?BasePerson $person)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->person = $person;
    }

    public function getPersonEditSessionID(): Guid
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(Guid $personEditSessionID): static
    {
        $new = clone $this;
        $new->personEditSessionID = $personEditSessionID;

        return $new;
    }

    public function getPerson(): ?BasePerson
    {
        return $this->person;
    }

    public function withPerson(?BasePerson $person): static
    {
        $new = clone $this;
        $new->person = $person;

        return $new;
    }
}
