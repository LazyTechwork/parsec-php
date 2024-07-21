<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetPersonExtraFieldValues implements RequestInterface
{
    private string $personEditSessionID;

    private ?ArrayOfExtraFieldValue $values = null;

    /**
     * Constructor.
     */
    public function __construct(string $personEditSessionID, ?ArrayOfExtraFieldValue $values)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->values = $values;
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

    public function getValues(): ?ArrayOfExtraFieldValue
    {
        return $this->values;
    }

    public function withValues(?ArrayOfExtraFieldValue $values): static
    {
        $new = clone $this;
        $new->values = $values;

        return $new;
    }
}
