<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания территории c информацией о связанном с ней компоненте.
 */
class TerritoryWithComponent extends Territory
{
    /**
     * @var UuidInterface Уникальный ключ компонента
     */
    protected UuidInterface $componentId;
    /**
     * @var int Битовая маска свойств компонента
     */
    protected int $featureMask;

    public function getComponentId(): UuidInterface
    {
        return $this->componentId;
    }

    public function setComponentId(UuidInterface $componentId): TerritoryWithComponent
    {
        $this->componentId = $componentId;

        return $this;
    }

    public function getFeatureMask(): int
    {
        return $this->featureMask;
    }

    public function setFeatureMask(int $featureMask): TerritoryWithComponent
    {
        $this->featureMask = $featureMask;

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
            'COMPONENT_ID' => 'guid',
            'FEATURE_MASK' => 'int',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'COMPONENT_ID' => 'componentId',
        'FEATURE_MASK' => 'featureMask',
    ];
}
