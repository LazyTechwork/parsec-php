<?php

namespace LazyTechwork\Parsec\Entities;

/**
 * Класс, используемый для представления временного интервала.
 */
final class TimeInterval extends BaseObject
{
    /**
     * @var \DateTimeInterface Начало интервала
     */
    private \DateTimeInterface $start;
    /**
     * @var \DateTimeInterface Окончание интервала
     */
    private \DateTimeInterface $end;

    public function getStart(): \DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): \DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): self
    {
        $this->end = $end;

        return $this;
    }

    /**
     * @return array<string, string|class-string|callable>
     */
    protected function casts(): array
    {
        return [
            'START' => 'DateTimeInterface',
            'END' => 'DateTimeInterface',
        ];
    }

    /**
     * @var array<string, string> stdClass -> this
     */
    protected array $attributeMapping = [
        'START' => 'start',
        'END' => 'end',
    ];
}
