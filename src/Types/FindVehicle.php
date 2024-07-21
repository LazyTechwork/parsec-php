<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class FindVehicle implements RequestInterface
{
    private string $sessionID;

    private ?string $number = null;

    private ?string $model = null;

    private ?string $color = null;

    /**
     * Constructor.
     */
    public function __construct(string $sessionID, ?string $number, ?string $model, ?string $color)
    {
        $this->sessionID = $sessionID;
        $this->number = $number;
        $this->model = $model;
        $this->color = $color;
    }

    public function getSessionID(): string
    {
        return $this->sessionID;
    }

    public function withSessionID(string $sessionID): static
    {
        $new = clone $this;
        $new->sessionID = $sessionID;

        return $new;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function withNumber(?string $number): static
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function withModel(?string $model): static
    {
        $new = clone $this;
        $new->model = $model;

        return $new;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function withColor(?string $color): static
    {
        $new = clone $this;
        $new->color = $color;

        return $new;
    }
}
