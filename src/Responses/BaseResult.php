<?php

namespace LazyTechwork\Parsec\Responses;

class BaseResult
{
    protected int $result;
    protected string $errorMessage;

    /**
     * Базовый класс, используется в качестве результата исполнения операции.
     *
     * Результат выполнения может быть следующим:
     * 0 – операция выполнена успешно;
     * -1 – операция выполнена с ошибкой;
     * Значения >0 планируется использовать для кодов специфических ошибок.
     *
     * @param int    $Result       Результат выполнения операции
     * @param string $ErrorMessage Описание ошибки, произошедшей при выполнении операции
     */
    public function __construct(
        int $Result,
        string $ErrorMessage
    ) {
        $this->result = $Result;
        $this->errorMessage = $ErrorMessage;
    }

    public function getResult(): int
    {
        return $this->result;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}
