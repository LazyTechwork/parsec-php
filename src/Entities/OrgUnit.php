<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

final class OrgUnit extends BaseOrgUnit
{
    /**
     * @var UuidInterface Уникальный ключ родительского подразделения
     */
    private UuidInterface $parentId;

    public function getParentId(): UuidInterface
    {
        return $this->parentId;
    }

    public function setParentId(UuidInterface $parentId): self
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
