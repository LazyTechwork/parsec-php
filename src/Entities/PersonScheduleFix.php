<?php

namespace LazyTechwork\Parsec\Entities;

use DateTimeInterface;
use LazyTechwork\Parsec\PersonScheduleFixType;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для определения поправки к рабочему времени сотрудника.
 */
final class PersonScheduleFix
{
    /**
     * @var UuidInterface Уникальный ключ поправки
     */
    private UuidInterface $id;
    /**
     * @var UuidInterface Уникальный ключ сотрудника
     */
    private UuidInterface $personId;
    /**
     * @var PersonScheduleFixType|int Тип поправки
     */
    private PersonScheduleFixType|int $type;
    /**
     * @var DateTimeInterface Дата и время начала интервала поправки
     */
    private DateTimeInterface $start;
    /**
     * @var DateTimeInterface Дата и время завершения интервала поправки
     */
    private DateTimeInterface $end;
    /**
     * @var string Комментарий к поправке рабочего времени
     */
    private string $comment;
    /**
     * Класс, используемый для определения поправки к рабочему времени сотрудника
     *
     * @param UuidInterface $FIX_ID Уникальный ключ поправки
     * @param UuidInterface $PERSON_ID Уникальный ключ сотрудника
     * @param PersonScheduleFixType|int $TYPE Тип поправки
     * @param DateTimeInterface $START Дата и время начала интервала поправки
     * @param DateTimeInterface $END Дата и время завершения интервала поправки
     * @param string $COMMENT Комментарий к поправке рабочего времени
     */
    public function __construct(
        UuidInterface $FIX_ID,
        UuidInterface $PERSON_ID,
        PersonScheduleFixType|int $TYPE,
        DateTimeInterface $START,
        DateTimeInterface $END,
        string $COMMENT,
    ) {
        $this->id = $FIX_ID;
        $this->personId = $PERSON_ID;
        $this->type = $TYPE;
        $this->start = $START;
        $this->end = $END;
        $this->comment = $COMMENT;
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function setId(UuidInterface $id): PersonScheduleFix
    {
        $this->id = $id;
        return $this;
    }

    public function getPersonId(): UuidInterface
    {
        return $this->personId;
    }

    public function setPersonId(UuidInterface $personId): PersonScheduleFix
    {
        $this->personId = $personId;
        return $this;
    }

    public function getType(): PersonScheduleFixType|int
    {
        return $this->type;
    }

    public function setType(PersonScheduleFixType|int $type): PersonScheduleFix
    {
        $this->type = $type;
        return $this;
    }

    public function getStart(): DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(DateTimeInterface $start): PersonScheduleFix
    {
        $this->start = $start;
        return $this;
    }

    public function getEnd(): DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(DateTimeInterface $end): PersonScheduleFix
    {
        $this->end = $end;
        return $this;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): PersonScheduleFix
    {
        $this->comment = $comment;
        return $this;
    }
}
