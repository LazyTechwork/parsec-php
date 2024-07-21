<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetEventHistoryResult implements RequestInterface
{
    private Guid $sessionID;

    private Guid $eventHistorySessionID;

    private ?ArrayOfGuid $fields = null;

    private int $offset;

    private int $count;

    /**
     * Constructor.
     */
    public function __construct(Guid $sessionID, Guid $eventHistorySessionID, ?ArrayOfGuid $fields, int $offset, int $count)
    {
        $this->sessionID = $sessionID;
        $this->eventHistorySessionID = $eventHistorySessionID;
        $this->fields = $fields;
        $this->offset = $offset;
        $this->count = $count;
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

    public function getEventHistorySessionID(): Guid
    {
        return $this->eventHistorySessionID;
    }

    public function withEventHistorySessionID(Guid $eventHistorySessionID): static
    {
        $new = clone $this;
        $new->eventHistorySessionID = $eventHistorySessionID;

        return $new;
    }

    public function getFields(): ?ArrayOfGuid
    {
        return $this->fields;
    }

    public function withFields(?ArrayOfGuid $fields): static
    {
        $new = clone $this;
        $new->fields = $fields;

        return $new;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function withOffset(int $offset): static
    {
        $new = clone $this;
        $new->offset = $offset;

        return $new;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function withCount(int $count): static
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }
}
