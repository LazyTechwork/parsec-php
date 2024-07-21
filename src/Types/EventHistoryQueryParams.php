<?php

namespace LazyTechwork\Parsec\Types;

class EventHistoryQueryParams
{
    private ?ArrayOfGuid $IDs = null;

    private ?Guid $ParentEventID = null;

    private ?\DateTimeInterface $StartDate = null;

    private ?\DateTimeInterface $EndDate = null;

    private ?\DateTimeInterface $StartTime0 = null;

    private ?\DateTimeInterface $EndTime0 = null;

    private ?\DateTimeInterface $StartTime1 = null;

    private ?\DateTimeInterface $EndTime1 = null;

    private ?ArrayOfGuid $Territories = null;

    private ?ArrayOfGuid $Operators = null;

    private ?ArrayOfUnsignedInt $TransactionTypes = null;

    private ?ArrayOfGuid $Organizations = null;

    private ?ArrayOfGuid $Users = null;

    private ?bool $EventsWithoutUser = null;

    private ?int $MaxResultSize = null;

    private bool $UseLocalTime;

    public function getIDs(): ?ArrayOfGuid
    {
        return $this->IDs;
    }

    public function withIDs(?ArrayOfGuid $IDs): static
    {
        $new = clone $this;
        $new->IDs = $IDs;

        return $new;
    }

    public function getParentEventID(): ?Guid
    {
        return $this->ParentEventID;
    }

    public function withParentEventID(?Guid $ParentEventID): static
    {
        $new = clone $this;
        $new->ParentEventID = $ParentEventID;

        return $new;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->StartDate;
    }

    public function withStartDate(?\DateTimeInterface $StartDate): static
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->EndDate;
    }

    public function withEndDate(?\DateTimeInterface $EndDate): static
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }

    public function getStartTime0(): ?\DateTimeInterface
    {
        return $this->StartTime0;
    }

    public function withStartTime0(?\DateTimeInterface $StartTime0): static
    {
        $new = clone $this;
        $new->StartTime0 = $StartTime0;

        return $new;
    }

    public function getEndTime0(): ?\DateTimeInterface
    {
        return $this->EndTime0;
    }

    public function withEndTime0(?\DateTimeInterface $EndTime0): static
    {
        $new = clone $this;
        $new->EndTime0 = $EndTime0;

        return $new;
    }

    public function getStartTime1(): ?\DateTimeInterface
    {
        return $this->StartTime1;
    }

    public function withStartTime1(?\DateTimeInterface $StartTime1): static
    {
        $new = clone $this;
        $new->StartTime1 = $StartTime1;

        return $new;
    }

    public function getEndTime1(): ?\DateTimeInterface
    {
        return $this->EndTime1;
    }

    public function withEndTime1(?\DateTimeInterface $EndTime1): static
    {
        $new = clone $this;
        $new->EndTime1 = $EndTime1;

        return $new;
    }

    public function getTerritories(): ?ArrayOfGuid
    {
        return $this->Territories;
    }

    public function withTerritories(?ArrayOfGuid $Territories): static
    {
        $new = clone $this;
        $new->Territories = $Territories;

        return $new;
    }

    public function getOperators(): ?ArrayOfGuid
    {
        return $this->Operators;
    }

    public function withOperators(?ArrayOfGuid $Operators): static
    {
        $new = clone $this;
        $new->Operators = $Operators;

        return $new;
    }

    public function getTransactionTypes(): ?ArrayOfUnsignedInt
    {
        return $this->TransactionTypes;
    }

    public function withTransactionTypes(?ArrayOfUnsignedInt $TransactionTypes): static
    {
        $new = clone $this;
        $new->TransactionTypes = $TransactionTypes;

        return $new;
    }

    public function getOrganizations(): ?ArrayOfGuid
    {
        return $this->Organizations;
    }

    public function withOrganizations(?ArrayOfGuid $Organizations): static
    {
        $new = clone $this;
        $new->Organizations = $Organizations;

        return $new;
    }

    public function getUsers(): ?ArrayOfGuid
    {
        return $this->Users;
    }

    public function withUsers(?ArrayOfGuid $Users): static
    {
        $new = clone $this;
        $new->Users = $Users;

        return $new;
    }

    public function isEventsWithoutUser(): ?bool
    {
        return $this->EventsWithoutUser;
    }

    public function withEventsWithoutUser(?bool $EventsWithoutUser): static
    {
        $new = clone $this;
        $new->EventsWithoutUser = $EventsWithoutUser;

        return $new;
    }

    public function getMaxResultSize(): ?int
    {
        return $this->MaxResultSize;
    }

    public function withMaxResultSize(?int $MaxResultSize): static
    {
        $new = clone $this;
        $new->MaxResultSize = $MaxResultSize;

        return $new;
    }

    public function isUseLocalTime(): bool
    {
        return $this->UseLocalTime;
    }

    public function withUseLocalTime(bool $UseLocalTime): static
    {
        $new = clone $this;
        $new->UseLocalTime = $UseLocalTime;

        return $new;
    }
}
