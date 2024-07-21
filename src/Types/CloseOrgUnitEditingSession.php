<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class CloseOrgUnitEditingSession implements RequestInterface
{
    private string $orgUnitEditSessionID;

    /**
     * Constructor.
     */
    public function __construct(string $orgUnitEditSessionID)
    {
        $this->orgUnitEditSessionID = $orgUnitEditSessionID;
    }

    public function getOrgUnitEditSessionID(): string
    {
        return $this->orgUnitEditSessionID;
    }

    public function withOrgUnitEditSessionID(string $orgUnitEditSessionID): static
    {
        $new = clone $this;
        $new->orgUnitEditSessionID = $orgUnitEditSessionID;

        return $new;
    }
}
