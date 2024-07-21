<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CloseOrgUnitEditingSession implements RequestInterface
{
    private Guid $orgUnitEditSessionID;

    /**
     * Constructor.
     */
    public function __construct(Guid $orgUnitEditSessionID)
    {
        $this->orgUnitEditSessionID = $orgUnitEditSessionID;
    }

    public function getOrgUnitEditSessionID(): Guid
    {
        return $this->orgUnitEditSessionID;
    }

    public function withOrgUnitEditSessionID(Guid $orgUnitEditSessionID): static
    {
        $new = clone $this;
        $new->orgUnitEditSessionID = $orgUnitEditSessionID;

        return $new;
    }
}
