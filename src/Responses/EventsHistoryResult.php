<?php

namespace LazyTechwork\Parsec\Responses;

use LazyTechwork\Parsec\Entities\EventsHistory;

/**
 * Класс используется в качестве результата функции GetEvents.
 */
final class EventsHistoryResult extends BaseResult
{
    private EventsHistory $history;

    public function getHistory(): EventsHistory
    {
        return $this->history;
    }

    public static function fromStdClass(\stdClass $obj): static
    {
        $instance = parent::fromStdClass($obj);
        $instance->history = (new EventsHistory())->fill($obj->Value);

        return $instance;
    }
}
