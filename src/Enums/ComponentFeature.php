<?php

namespace LazyTechwork\Parsec\Enums;

enum ComponentFeature: int
{
    case DOOR = 0; // Дверь
    case TWO_READERS = 1; // 2 считывателя
    case ANTIPASSBACK = 2; // АПБ
    case SUPPORTS_COMPLICATED_SCHEDULE = 3; // Поддерживает сложные расписания
    case TABLETOP_READER = 4; // Используется как настольный считыватель
    case SECURITY_AREA = 5; // Охранная область
    case VIDEO_STREAM_SOURCE = 6; // Источник видео потока
    case TURNSTILE = 7; // Турникет
    case RESERVED_8 = 8;
    case DOES_NOT_SUPPORT_SCHEDULE = 9; // Не поддерживает расписания
    case PROGRAMMATIC_CONTROLLER = 10; // Программный контроллер
    case RESERVED_11 = 11;
    case NOT_LIMITED_BY_LICENSE = 12; // Не ограничивается лицензией
    case LIFT_CONTROLLER = 13; // Лифтовой контроллер
    case RESERVED_14 = 14;
    case DISABLED_BY_OPERATOR = 62; // Отключен оператором
    case LIMITED_BY_LICENSE = 63; // Не обслуживается по ограничениям лицензии
}
