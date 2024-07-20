<?php

namespace LazyTechwork\Parsec\Responses;

use LazyTechwork\Parsec\Entities\Session;

/**
 * Класс используется в качестве результата функции OpenSession.
 */
final class SessionResult extends BaseResult
{
    private Session $session;


    public function getSession(): Session
    {
        return $this->session;
    }

    public static function fromStdClass(\stdClass $obj): static
    {
        $instance = parent::fromStdClass($obj);
        $instance->session = (new Session())->fill($obj->Value);

        return $instance;
    }
}
