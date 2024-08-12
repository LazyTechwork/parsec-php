<?php

namespace LazyTechwork\Parsec\Types;

final class Date
{
    public function __construct(public \DateTimeInterface $date)
    {
    }
}
