<?php

namespace LazyTechwork\Parsec;

enum PersonScheduleFixType: int
{
    case SICK = 4;  // Больничный;
    case BUSINESS_TRIP = 5;  // Командировка;
    case VACATION = 6;  // Отпуск;
    case APPLIED = 7;  // Принят на работу;
    case FIRED = 8;  // Уволен;
    case UNSCHEDULED_VACATION = 9;  // Отпуск без сохранения содержания;
    case FULL_TIME = 10; // Полный рабочий день;
    case PRESENT = 11; // Присутствие (только в этой поправке может передаваться ненулевое время, остальные поправки должны быть с временем 00:00).
}
