<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

final class Session
{
    private UuidInterface $sessionId;
    private UuidInterface $rootOrgUnitId;
    private UuidInterface $rootTerritoryId;

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
