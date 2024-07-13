<?php

namespace LazyTechwork\Parsec\Entities;

use DateTimeInterface;

/**
 * Класс, используемый для представления временного интервала
 */
final class TimeInterval extends BaseObject
{
    /**
     * @var DateTimeInterface Начало интервала
     */
    private DateTimeInterface $start;
    /**
     * @var DateTimeInterface Окончание интервала
     */
    private DateTimeInterface $end;

    /**
     * Класс, используемый для представления временного интервала
     *
     * @param DateTimeInterface $START Начало интервала
     * @param DateTimeInterface $END Окончание интервала
     */
    public function __construct(DateTimeInterface $START, DateTimeInterface $END)
    {
        $this->start = $START;
        $this->end = $END;
    }

    public function getStart(): DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(DateTimeInterface $start): self
    {
        $this->start = $start;
        return $this;
    }

    public function getEnd(): DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(DateTimeInterface $end): self
    {
        $this->end = $end;
        return $this;
    }
}
