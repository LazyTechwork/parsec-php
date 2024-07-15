<?php

namespace LazyTechwork\Parsec\Responses;

use LazyTechwork\Parsec\Entities\Session;

final class SessionResult extends BaseResult
{
    private Session $session;

    /**
     * Класс используется в качестве результата функции OpenSession.
     *
     * @param int     $Result       Результат выполнения операции. 0 – операция выполнена успешно, -1 – операция выполнена с ошибкой. Значения >0 планируется использовать для кодов специфических ошибок.
     * @param string  $ErrorMessage описание ошибки, произошедшей при выполнении операции
     * @param Session $Value        результат выполнения операции
     */
    public function __construct(int $Result, string $ErrorMessage, Session $Value)
    {
        parent::__construct($Result, $ErrorMessage);
        $this->session = $Value;
    }

    public function getSession(): Session
    {
        return $this->session;
    }
}
