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

    /**
     * Класс, используемый для задания прав доступа расширенного QR-кода.
     *
     * @param \DateTimeInterface $DateFrom Дата начала срока действия QR-кода
     * @param \DateTimeInterface $DateTo   Дата окончания срока действия QR-кода
     * @param \DateTimeInterface $TimeFrom Начало временного интервала внутри срока действия QR-кода. Необязательный параметр
     * @param \DateTimeInterface $TimeTo   Конец временного интервала внутри срока действия QR-кода. Необязательный параметр
     * @param int[]              $Groups   Массив ключей групп контроллеров, через которые QR-код имеет право прохода
     * @param int                $CardID   Идентификатор субъекта доступа
     */
    public function __construct(
        \DateTimeInterface $DateFrom,
        \DateTimeInterface $DateTo,
        \DateTimeInterface $TimeFrom,
        \DateTimeInterface $TimeTo,
        array $Groups,
        int $CardID
    ) {
        $this->dateFrom = $DateFrom;
        $this->dateTo = $DateTo;
        $this->timeFrom = $TimeFrom;
        $this->timeTo = $TimeTo;
        $this->groups = $Groups;
        $this->cardId = $CardID;
    }

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
}
