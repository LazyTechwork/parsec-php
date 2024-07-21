<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class PersonSearch implements RequestInterface
{
    private string $sessionID;

    private string $fieldID;

    private int $relation;

    /**
     * @var mixed|null
     */
    private mixed $value = null;

    /**
     * @var mixed|null
     */
    private mixed $value1 = null;

    /**
     * Constructor.
     *
     * @param mixed|null $value
     * @param mixed|null $value1
     */
    public function __construct(string $sessionID, string $fieldID, int $relation, mixed $value, mixed $value1)
    {
        $this->sessionID = $sessionID;
        $this->fieldID = $fieldID;
        $this->relation = $relation;
        $this->value = $value;
        $this->value1 = $value1;
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

    public function getFieldID(): string
    {
        return $this->fieldID;
    }

    public function withFieldID(string $fieldID): static
    {
        $new = clone $this;
        $new->fieldID = $fieldID;

        return $new;
    }

    public function getRelation(): int
    {
        return $this->relation;
    }

    public function withRelation(int $relation): static
    {
        $new = clone $this;
        $new->relation = $relation;

        return $new;
    }

    /**
     * @return mixed|null
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * @param mixed|null $value
     */
    public function withValue(mixed $value): static
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    /**
     * @return mixed|null
     */
    public function getValue1(): mixed
    {
        return $this->value1;
    }

    /**
     * @param mixed|null $value1
     */
    public function withValue1(mixed $value1): static
    {
        $new = clone $this;
        $new->value1 = $value1;

        return $new;
    }
}
