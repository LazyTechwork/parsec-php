<?php

namespace LazyTechwork\Parsec\Responses;

use Ramsey\Uuid\UuidInterface;

final class GuidResult extends BaseResult
{
    private UuidInterface $guid;

    /**
     * Класс используется в качестве результата в функциях, возвращающих Guid.
     *
     * @param int           $Result       Результат выполнения операции. 0 – операция выполнена успешно, -1 – операция выполнена с ошибкой. Значения >0 планируется использовать для кодов специфических ошибок.
     * @param string        $ErrorMessage описание ошибки, произошедшей при выполнении операции
     * @param UuidInterface $Value        результирующий ID
     */
    public function __construct(int $Result, string $ErrorMessage, UuidInterface $Value)
    {
        parent::__construct($Result, $ErrorMessage);
        $this->guid = $Value;
    }

    public function getGuid(): UuidInterface
    {
        return $this->guid;
    }
}
