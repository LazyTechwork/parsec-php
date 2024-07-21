<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class GetEventHistoryResult implements RequestInterface
{
    private string $sessionID;

    private string $eventHistorySessionID;

    private ?ArrayOfGuid $fields = null;

    private int $offset;

    private int $count;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, string $eventHistorySessionID, ?ArrayOfGuid $fields, int $offset, int $count)
    {
        $this->sessionID = $sessionID;
        $this->eventHistorySessionID = $eventHistorySessionID;
        $this->fields = $fields;
        $this->offset = $offset;
        $this->count = $count;
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

    public function getEventHistorySessionID(): string
    {
        return $this->eventHistorySessionID;
    }

    public function withEventHistorySessionID(string $eventHistorySessionID): static
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
