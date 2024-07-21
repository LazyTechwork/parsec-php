<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BlockPerson implements RequestInterface
{
    private string $personEditSessionID;

    private int $typeBlock;

    /**
     * Constructor.
     */
    public function __construct(string $personEditSessionID, int $typeBlock)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->typeBlock = $typeBlock;
    }

    public function getPersonEditSessionID(): string
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(string $personEditSessionID): static
    {
        $new = clone $this;
        $new->personEditSessionID = $personEditSessionID;

        return $new;
    }

    public function getTypeBlock(): int
    {
        return $this->typeBlock;
    }

    public function withTypeBlock(int $typeBlock): static
    {
        $new = clone $this;
        $new->typeBlock = $typeBlock;

        return $new;
    }
}
