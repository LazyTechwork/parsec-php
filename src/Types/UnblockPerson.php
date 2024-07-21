<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class UnblockPerson implements RequestInterface
{
    private string $personEditSessionID;

    /**
     * Constructor.
     */
    public function __construct(string $personEditSessionID)
    {
        $this->personEditSessionID = $personEditSessionID;
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
}
