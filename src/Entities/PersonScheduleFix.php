<?php

namespace LazyTechwork\Parsec\Entities;

use LazyTechwork\Parsec\Enums\PersonScheduleFixType;
use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для определения поправки к рабочему времени сотрудника.
 */
final class PersonScheduleFix extends BaseObject
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
     * @var \DateTimeInterface Дата и время начала интервала поправки
     */
    private \DateTimeInterface $start;
    /**
     * @var \DateTimeInterface Дата и время завершения интервала поправки
     */
    private \DateTimeInterface $end;
    /**
     * @var string Комментарий к поправке рабочего времени
     */
    private string $comment;

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

    public function getStart(): \DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): PersonScheduleFix
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): \DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): PersonScheduleFix
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

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'FIX_ID' => 'guid',
            'PERSON_ID' => 'guid',
            'START' => 'DateTimeInterface',
            'END' => 'DateTimeInterface',
            'COMMENT' => 'string',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'FIX_ID' => 'id',
        'PERSON_ID' => 'personId',
        'TYPE' => 'type',
        'START' => 'start',
        'END' => 'end',
        'COMMENT' => 'comment',
    ];
}
