<?php

namespace LazyTechwork\Parsec\Responses;

class ObjectResult extends BaseResult
{
    protected object $value;

    /**
     * Класс используется в качестве результата в функциях, возвращающих Object.
     *
     * @param int    $Result       Результат выполнения операции. 0 – операция выполнена успешно, -1 – операция выполнена с ошибкой. Значения >0 планируется использовать для кодов специфических ошибок.
     * @param string $ErrorMessage описание ошибки, произошедшей при выполнении операции
     * @param object $Value        результат выполнения операции
     */
    public function __construct(int $Result, string $ErrorMessage, object $Value)
    {
        parent::__construct($Result, $ErrorMessage);
        $this->value = $Value;
    }

    public function getValue(): object
    {
        return $this->value;
    }
}
