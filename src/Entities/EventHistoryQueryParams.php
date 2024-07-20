<?php

namespace LazyTechwork\Parsec\Entities;

use Ramsey\Uuid\UuidInterface;

/**
 * Класс, используемый для описания критериев формируемого отчета по событиям. В качестве любого параметра может быть передан null. В таком случае данный критерий не будет использован при отборе событий в отчет.
 * Параметры даты и времени передаются в UTC при значении параметра UseLocalTime == false (по умолчанию).
 * Если в часовой диапазон попадает момент окончания суток (24.00), то такой диапазон нужно разбить на два: с ХХ часов по 24.00 и с 00.00 часов до YY. При этом для первой части диапазона используются параметры StartTime0 и EndTime0, а для второй части - StartTime1 и EndTime1.
 */
final class EventHistoryQueryParams extends BaseObject
{
    /**
     * @var UuidInterface[] Массив ключей событий, которые будут отобраны в отчет. Если задан, все остальные параметры игнорируются
     */
    private array $ids;
    /**
     * @var UuidInterface[] Массив ключей «первичных» событий. В отчет будут отобраны все события, связанные с первичными событиями. Если задан, все параметры (кроме IDs) игнорируются. Значение ParentEventId={Guid.Empty} интерперетируется так же, как значение {null} (для совместимости с Delphi)
     */
    private array $parentEventId;
    /**
     * @var \DateTimeInterface дата начала временного периода, за который создается отчет
     */
    private \DateTimeInterface $startDate;
    /**
     * @var \DateTimeInterface Дата окончания временного периода, за который создается отчет
     */
    private \DateTimeInterface $endDate;
    /**
     * @var \DateTimeInterface Время начала часового диапазона внутри временного периода. В отчет будут отобраны только события, произошедшие в течение этого диапазона
     */
    private \DateTimeInterface $startTime0;
    /**
     * @var \DateTimeInterface Время окончания часового диапазона внутри временного периода. В отчет будут отобраны только события, произошедшие в течение этого диапазона.
     */
    private \DateTimeInterface $endTime0;
    /**
     * @var \DateTimeInterface Время начала второго часового диапазона внутри временного периода. Задействуется, если в диапазон попадает окончание суток.*
     */
    private \DateTimeInterface $startTime1;
    /**
     * @var \DateTimeInterface Время окончания второго часового диапазона внутри временного периода. Задействуется, если в диапазон попадает окончание суток.*
     */
    private \DateTimeInterface $endTime1;
    /**
     * @var UuidInterface[] Массив ключей территорий, по которым будет сформирован отчет
     */
    private array $territories;
    /**
     * @var UuidInterface[] Параметр предназначен для внутреннего использования
     */
    private array $operators;
    /**
     * @var array<int|\LazyTechwork\Parsec\Enums\TransactionKey> Массив ключей типов транзакций. В качестве параметра можно использовать один или несколько ключей транзакций из приведенной ниже таблицы.
     */
    private array $transactionTypes;
    /**
     * @var UuidInterface[] Массив ключей подразделений, по которым будет сформирован отчет
     */
    private array $organizations;
    /**
     * @var UuidInterface[] Массив ключей пользователей, по событиям которых будет сформирован отчет
     */
    private array $users;
    /**
     * @var bool Параметр предназначен для внутреннего использования
     */
    private bool $eventsWithoutUser;
    /**
     * @var int|null Максимальное количество событий, отображенных в отчете. При передаче null отображается количество событий по умолчанию (5000 шт.).
     */
    private ?int $maxResultSize;
    /**
     * @var bool при установке данного параметра в true события будут фильтроваться и возвращаться с учетом часового пояса контроллеров
     */
    private bool $useLocalTime;

    public function getIds(): array
    {
        return $this->ids;
    }

    public function setIds(array $ids): self
    {
        $this->ids = $ids;

        return $this;
    }

    public function getParentEventId(): array
    {
        return $this->parentEventId;
    }

    public function setParentEventId(array $parentEventId): self
    {
        $this->parentEventId = $parentEventId;

        return $this;
    }

    public function getStartDate(): \DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): \DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getStartTime0(): \DateTimeInterface
    {
        return $this->startTime0;
    }

    public function setStartTime0(\DateTimeInterface $startTime0): self
    {
        $this->startTime0 = $startTime0;

        return $this;
    }

    public function getEndTime0(): \DateTimeInterface
    {
        return $this->endTime0;
    }

    public function setEndTime0(\DateTimeInterface $endTime0): self
    {
        $this->endTime0 = $endTime0;

        return $this;
    }

    public function getStartTime1(): \DateTimeInterface
    {
        return $this->startTime1;
    }

    public function setStartTime1(\DateTimeInterface $startTime1): self
    {
        $this->startTime1 = $startTime1;

        return $this;
    }

    public function getEndTime1(): \DateTimeInterface
    {
        return $this->endTime1;
    }

    public function setEndTime1(\DateTimeInterface $endTime1): self
    {
        $this->endTime1 = $endTime1;

        return $this;
    }

    public function getTerritories(): array
    {
        return $this->territories;
    }

    public function setTerritories(array $territories): self
    {
        $this->territories = $territories;

        return $this;
    }

    public function getOperators(): array
    {
        return $this->operators;
    }

    public function setOperators(array $operators): self
    {
        $this->operators = $operators;

        return $this;
    }

    public function getTransactionTypes(): array
    {
        return $this->transactionTypes;
    }

    public function setTransactionTypes(array $transactionTypes): self
    {
        $this->transactionTypes = $transactionTypes;

        return $this;
    }

    public function getOrganizations(): array
    {
        return $this->organizations;
    }

    public function setOrganizations(array $organizations): self
    {
        $this->organizations = $organizations;

        return $this;
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function isEventsWithoutUser(): bool
    {
        return $this->eventsWithoutUser;
    }

    public function setEventsWithoutUser(bool $eventsWithoutUser): self
    {
        $this->eventsWithoutUser = $eventsWithoutUser;

        return $this;
    }

    public function getMaxResultSize(): ?int
    {
        return $this->maxResultSize;
    }

    public function setMaxResultSize(?int $maxResultSize): self
    {
        $this->maxResultSize = $maxResultSize;

        return $this;
    }

    public function isUseLocalTime(): bool
    {
        return $this->useLocalTime;
    }

    public function setUseLocalTime(bool $useLocalTime): self
    {
        $this->useLocalTime = $useLocalTime;

        return $this;
    }
}
