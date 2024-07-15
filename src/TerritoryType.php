<?php

namespace LazyTechwork\Parsec;

enum TerritoryType: int
{
    case DIRECTORY = 0; // Папка
    case DOOR = 1; // Дверь
    case COMPONENT = 2; // Деталь
    case OTHER = 3; // Остальные компоненты
}
