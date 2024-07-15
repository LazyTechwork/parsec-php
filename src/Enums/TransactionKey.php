<?php

namespace LazyTechwork\Parsec\Enums;

enum TransactionKey: int
{
    case NORMAL_ENTER = 590144; // Нормальный вход по ключу
    case ACTUAL_ENTER = 590152; // Фактический вход
    case NORMAL_EXIT = 590145; // Нормальный выход по ключу
    case ACTUAL_EXIT = 590153; // Фактический выход
    case EXIT_OUT_OF_TIME = 590146; // Выход вне временного профиля
    case NORMAL_VISITOR_EXIT = 590244; // Нормальный выход посетителя
    case ACTUAL_VISITOR_EXIT = 590245; // Фактический выход посетителя
}
