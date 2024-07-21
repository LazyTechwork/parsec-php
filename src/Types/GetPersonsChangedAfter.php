<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetPersonsChangedAfter implements RequestInterface
{
    private Guid $sessionID;

    private Guid $orgID;

    private \DateTimeInterface $dateFrom;

    private bool $includeSubOrg;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $orgID, \DateTimeInterface $dateFrom, bool $includeSubOrg)
    {
        $this->sessionID = $sessionID;
        $this->orgID = $orgID;
        $this->dateFrom = $dateFrom;
        $this->includeSubOrg = $includeSubOrg;
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

    public function getOrgID(): Guid
    {
        return $this->orgID;
    }

    public function withOrgID(Guid $orgID): static
    {
        $new = clone $this;
        $new->orgID = $orgID;

        return $new;
    }

    public function getDateFrom(): \DateTimeInterface
    {
        return $this->dateFrom;
    }

    public function withDateFrom(\DateTimeInterface $dateFrom): static
    {
        $new = clone $this;
        $new->dateFrom = $dateFrom;

        return $new;
    }

    public function isIncludeSubOrg(): bool
    {
        return $this->includeSubOrg;
    }

    public function withIncludeSubOrg(bool $includeSubOrg): static
    {
        $new = clone $this;
        $new->includeSubOrg = $includeSubOrg;

        return $new;
    }
}
