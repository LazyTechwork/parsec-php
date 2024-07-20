<?php

namespace LazyTechwork\Parsec\Entities;

/**
 * Класс, используемый для задания прав доступа расширенного QR-кода.
 */
final class QRAdvancedData extends BaseObject
{
    /**
     * @var \DateTimeInterface Дата начала срока действия QR-кода
     */
    private \DateTimeInterface $dateFrom;
    /**
     * @var \DateTimeInterface Дата окончания срока действия QR-кода
     */
    private \DateTimeInterface $dateTo;
    /**
     * @var \DateTimeInterface Начало временного интервала внутри срока действия QR-кода. Необязательный параметр
     */
    private \DateTimeInterface $timeFrom;
    /**
     * @var \DateTimeInterface Конец временного интервала внутри срока действия QR-кода. Необязательный параметр
     */
    private \DateTimeInterface $timeTo;
    /**
     * @var int[] Массив ключей групп контроллеров, через которые QR-код имеет право прохода
     */
    private array $groups;
    /**
     * @var int Идентификатор субъекта доступа
     */
    private int $cardId;

    public function getDateFrom(): \DateTimeInterface
    {
        return $this->dateFrom;
    }

    public function setDateFrom(\DateTimeInterface $dateFrom): self
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    public function getDateTo(): \DateTimeInterface
    {
        return $this->dateTo;
    }

    public function setDateTo(\DateTimeInterface $dateTo): self
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    public function getTimeFrom(): \DateTimeInterface
    {
        return $this->timeFrom;
    }

    public function setTimeFrom(\DateTimeInterface $timeFrom): self
    {
        $this->timeFrom = $timeFrom;

        return $this;
    }

    public function getTimeTo(): \DateTimeInterface
    {
        return $this->timeTo;
    }

    public function setTimeTo(\DateTimeInterface $timeTo): self
    {
        $this->timeTo = $timeTo;

        return $this;
    }

    public function getGroups(): array
    {
        return $this->groups;
    }

    public function setGroups(array $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    public function getCardId(): int
    {
        return $this->cardId;
    }

    public function setCardId(int $cardId): self
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'DateFrom' => 'DateTimeInterface',
            'DateTo' => 'DateTimeInterface',
            'TimeFrom' => 'DateTimeInterface',
            'TimeTo' => 'DateTimeInterface',
            'Groups' => 'array',
            'CardID' => 'int',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'DateFrom' => 'dateFrom',
        'DateTo' => 'dateTo',
        'TimeFrom' => 'timeFrom',
        'TimeTo' => 'timeTo',
        'Groups' => 'groups',
        'CardID' => 'cardId',
    ];
}
