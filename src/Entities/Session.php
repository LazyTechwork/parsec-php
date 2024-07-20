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

    /**
     * Класс, содержащий информацию для сессии.
     *
     * @param UuidInterface $SessionID       Уникальный ключ сессии, используемый при выполнении дальнейших операций
     * @param UuidInterface $RootOrgUnitID   ID корневого элемента дерева персонала
     * @param UuidInterface $RootTerritoryID ID корневого элемента дерева территорий
     */
    public function __construct(
        #[\SensitiveParameter] UuidInterface $SessionID,
        UuidInterface $RootOrgUnitID,
        UuidInterface $RootTerritoryID
    ) {
        $this->sessionId = $SessionID;
        $this->rootOrgUnitId = $RootOrgUnitID;
        $this->rootTerritoryId = $RootTerritoryID;
    }

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
}
