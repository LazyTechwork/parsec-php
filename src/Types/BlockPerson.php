<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class BlockPerson implements RequestInterface
{
    private Guid $personEditSessionID;

    private int $typeBlock;

    /**
     * Constructor.
     */
    public function __construct(Guid $personEditSessionID, int $typeBlock)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->typeBlock = $typeBlock;
    }

    public function getPersonEditSessionID(): Guid
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(Guid $personEditSessionID): static
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
