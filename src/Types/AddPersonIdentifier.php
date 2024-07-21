<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class AddPersonIdentifier implements RequestInterface
{
    private string $personEditSessionID;

    private ?BaseIdentifier $identifier = null;

    /**
     * Constructor.
     */
    public function __construct(string $personEditSessionID, ?BaseIdentifier $identifier)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->identifier = $identifier;
    }

    public function getPersonEditSessionID(): string
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(string $personEditSessionID): static
    {
        $new = clone $this;
        $new->personEditSessionID = $personEditSessionID;

        return $new;
    }

    public function getIdentifier(): ?BaseIdentifier
    {
        return $this->identifier;
    }

    public function withIdentifier(?BaseIdentifier $identifier): static
    {
        $new = clone $this;
        $new->identifier = $identifier;

        return $new;
    }
}
