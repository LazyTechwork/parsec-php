<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, содержащий информацию для сессии.
 */
final class Session extends BaseObject
{
    /**
     * @var UuidInterface Уникальный ключ сессии, используемый при выполнении дальнейших операций
     */
    private UuidInterface $sessionId;
    /**
     * @var UuidInterface ID корневого элемента дерева персонала
     */
    private UuidInterface $rootOrgUnitId;
    /**
     * @var UuidInterface ID корневого элемента дерева территорий
     */
    private UuidInterface $rootTerritoryId;

    public function getSessionId(): UuidInterface
    {
        return $this->sessionId;
    }

    public function getRootOrgUnitId(): UuidInterface
    {
        return $this->rootOrgUnitId;
    }

    public function getRootTerritoryId(): UuidInterface
    {
        return $this->rootTerritoryId;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'SessionID' => 'guid',
            'RootOrgUnitID' => 'guid',
            'RootTerritoryID' => 'guid',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'SessionID' => 'sessionId',
        'RootOrgUnitID' => 'rootOrgUnitId',
        'RootTerritoryID' => 'rootTerritoryId',
    ];
}
