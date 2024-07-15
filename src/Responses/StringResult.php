<?php

namespace LazyTechwork\Parsec\Responses;

final class StringResult extends BaseResult
{
    private string $value;

    /**
     * Класс используется в качестве результата в функциях, возвращающих String.
     *
     * @param int    $Result       Результат выполнения операции. 0 – операция выполнена успешно, -1 – операция выполнена с ошибкой. Значения >0 планируется использовать для кодов специфических ошибок.
     * @param string $ErrorMessage описание ошибки, произошедшей при выполнении операции
     * @param string $Value        результат выполнения операции
     */
    public function __construct(int $Result, string $ErrorMessage, string $Value)
    {
        parent::__construct($Result, $ErrorMessage);
        $this->value = $Value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
