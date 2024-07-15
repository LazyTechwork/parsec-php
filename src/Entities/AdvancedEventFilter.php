<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\TransactionKey;
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

    /**
     * Расширенный класс, используемый для отбора событий по подписке.
     *
     * @param array<int|TransactionKey> $TransactionTypes Массив ключей типов транзакций. В качестве параметра можно использовать один или несколько ключей транзакций
     * @param UuidInterface[]           $Territories      Массив ключей территорий, по которым будут отбираться события
     * @param UuidInterface[]           $Organizations    Массив ключей подразделений, по которым будут отбираться события
     * @param UuidInterface[]           $Users            Массив ключей пользователей, по которым будут отбираться события
     */
    public function __construct(array $TransactionTypes, array $Territories, array $Organizations, array $Users)
    {
        parent::__construct($TransactionTypes);
        $this->territories = $Territories;
        $this->organizations = $Organizations;
        $this->users = $Users;
    }

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
}
