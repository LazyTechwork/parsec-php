<?php

namespace LazyTechwork\Parsec\Types;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class Guid implements \Stringable
{
    private ?UuidInterface $guid;

    public function __construct(?string $guid = null)
    {
        $this->guid = $guid ? \Ramsey\Uuid\Guid\Guid::fromString($guid) : null;
    }

    public function __toString(): string
    {
        return $this->guid?->toString() ?? '';
    }

    public function toString(): string
    {
        return (string) $this;
    }

    public static function fromString(string $guid): self
    {
        return new self($guid);
    }

    public static function ZERO(): self
    {
        return new self(Uuid::NIL);
    }
}
