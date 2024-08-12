<?php

namespace LazyTechwork\Parsec\Types;

final class DateTime
{
    public function __construct(public \DateTimeInterface $dateTime)
    {
    }
}
