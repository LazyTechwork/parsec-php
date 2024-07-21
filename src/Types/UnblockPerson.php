<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class UnblockPerson implements RequestInterface
{
    private Guid $personEditSessionID;

    /**
     * Constructor.
     */
    public function __construct(Guid $personEditSessionID)
    {
        $this->personEditSessionID = $personEditSessionID;
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
}
