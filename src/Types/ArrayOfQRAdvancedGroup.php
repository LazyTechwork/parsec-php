<?php

namespace LazyTechwork\Parsec\Types;

class ArrayOfQRAdvancedGroup
{
    /**
     * @var array<int<0,max>, \LazyTechwork\Parsec\Types\QRAdvancedGroup>|null
     */
    private ?array $QRAdvancedGroup = null;

    /**
     * @return array<int<0,max>, \LazyTechwork\Parsec\Types\QRAdvancedGroup>|null
     */
    public function getQRAdvancedGroup(): ?array
    {
        return $this->QRAdvancedGroup;
    }

    /**
     * @param array<int<0,max>, \LazyTechwork\Parsec\Types\QRAdvancedGroup>|null $QRAdvancedGroup
     */
    public function withQRAdvancedGroup(?array $QRAdvancedGroup): static
    {
        $new = clone $this;
        $new->QRAdvancedGroup = $QRAdvancedGroup;

        return $new;
    }
}
