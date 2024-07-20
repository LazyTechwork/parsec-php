<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Расширенный класс, используемый для отбора событий по подписке.
 */
final class AdvancedEventFilter extends EventFilter
{
    /**
     * @var UuidInterface[] Массив ключей территорий, по которым будут отбираться события
     */
    private array $territories;
    /**
     * @var UuidInterface[] Массив ключей подразделений, по которым будут отбираться события
     */
    private array $organizations;
    /**
     * @var UuidInterface[] Массив ключей пользователей, по которым будут отбираться события
     */
    private array $users;

    public function getTerritories(): array
    {
        return $this->territories;
    }

    public function setTerritories(array $territories): static
    {
        $this->territories = $territories;

        return $this;
    }

    public function getOrganizations(): array
    {
        return $this->organizations;
    }

    public function setOrganizations(array $organizations): static
    {
        $this->organizations = $organizations;

        return $this;
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): static
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'TransactionTypes' => 'array',
            'Territories' => 'array',
            'Organizations' => 'array',
            'Users' => 'array',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'Territories' => 'territories',
        'Organizations' => 'organizations',
        'Users' => 'users',
    ];
}
