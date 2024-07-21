<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetPersonsChangedAfter implements RequestInterface
{
    private string $sessionID;

    private string $orgID;

    private \DateTimeInterface $dateFrom;

    private bool $includeSubOrg;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $orgID, \DateTimeInterface $dateFrom, bool $includeSubOrg)
    {
        $this->sessionID = $sessionID;
        $this->orgID = $orgID;
        $this->dateFrom = $dateFrom;
        $this->includeSubOrg = $includeSubOrg;
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

    public function getOrgID(): string
    {
        return $this->orgID;
    }

    public function withOrgID(string $orgID): static
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
