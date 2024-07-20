<?php

namespace LazyTechwork\Parsec\Responses;

/**
 * Базовый класс, используется в качестве результата исполнения операции.
 *
 * Результат выполнения может быть следующим:
 * 0 – операция выполнена успешно;
 * -1 – операция выполнена с ошибкой;
 * Значения >0 планируется использовать для кодов специфических ошибок.
 */
class BaseResult
{
    /**
     * @var int Результат выполнения операции
     */
    protected int $result;
    /**
     * @var string|null Описание ошибки, произошедшей при выполнении операции
     */
    protected ?string $errorMessage;

    public function getResult(): int
    {
        return $this->result;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public static function fromStdClass(\stdClass $obj): static
    {
        $instance = new static();
        $instance->result = $obj->Result;
        $instance->errorMessage = $obj->ErrorMessage ?? null;

        return $instance;
    }
}
