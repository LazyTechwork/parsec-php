<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания территории.
 */
class Territory extends BaseTerritory
{
    protected UuidInterface $parentId;

    public function getParentId(): UuidInterface
    {
        return $this->parentId;
    }

    public function setParentId(UuidInterface $parentId): static
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'ID' => 'guid',
            'NAME' => 'string',
            'DESC' => 'string',
            'PARENT_ID' => 'guid',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'PARENT_ID' => 'parentId',
    ];
}
