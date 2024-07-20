<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

class Person extends BasePerson
{
    /**
     * @var UuidInterface Уникальный ключ подразделения для сотрудника
     */
    protected UuidInterface $orgId;

    public function getOrgId(): UuidInterface
    {
        return $this->orgId;
    }

    public function setOrgId(UuidInterface $orgId): Person
    {
        $this->orgId = $orgId;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'ID' => 'guid',
            'LAST_NAME' => 'string',
            'FIRST_NAME' => 'string',
            'MIDDLE_NAME' => 'string',
            'TAB_NUM' => 'string',
            'ORG_ID' => 'guid',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'ORG_ID' => 'orgId',
    ];
}
