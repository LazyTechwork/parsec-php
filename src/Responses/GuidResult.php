<?php

namespace LazyTechwork\Parsec\Responses;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс используется в качестве результата в функциях, возвращающих GUID.
 */
final class GuidResult extends BaseResult
{
    /**
     * @var UuidInterface Результирующий ID
     */
    private UuidInterface $guid;

    public function getGuid(): UuidInterface
    {
        return $this->guid;
    }

    public static function fromStdClass(\stdClass $obj): static
    {
        $instance = parent::fromStdClass($obj);
        $instance->guid = $obj->Value;

        return $instance;
    }
}
