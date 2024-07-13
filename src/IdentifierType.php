<?php

namespace LazyTechwork\Parsec;

enum IdentifierType: int
{
    case PARSEC_ACCESS_CONTROL_SYSTEM = 0; // Подсистема доступа «Parsec»
    case CAR_NUMBER = 1; // Автомобильный номер
}
