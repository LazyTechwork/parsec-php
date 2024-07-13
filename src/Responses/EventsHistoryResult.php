<?php

namespace LazyTechwork\Parsec\Responses;

use LazyTechwork\Parsec\Entities\EventsHistory;

final class EventsHistoryResult extends BaseResult
{
    private EventsHistory $history;

    /**
     * Класс используется в качестве результата функции GetEvents.
     *
     * @param int $Result Результат выполнения операции. 0 – операция выполнена успешно, -1 – операция выполнена с ошибкой. Значения >0 планируется использовать для кодов специфических ошибок.
     * @param string $ErrorMessage Описание ошибки, произошедшей при выполнении операции.
     * @param EventsHistory $Value Результат выполнения операции.
     */
    public function __construct(int $Result, string $ErrorMessage, EventsHistory $Value)
    {
        parent::__construct($Result, $ErrorMessage);
        $this->history = $Value;
    }

    public function getHistory(): EventsHistory
    {
        return $this->history;
    }
}
