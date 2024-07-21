<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetPersonExtraFieldValue implements RequestInterface
{
    private string $personEditSessionID;

    private string $templateID;

    /**
     * @var mixed|null
     */
    private mixed $value = null;

    /**
     * Constructor.
     *
     * @param mixed|null $value
     */
    public function __construct(string $personEditSessionID, string $templateID, mixed $value)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->templateID = $templateID;
        $this->value = $value;
    }

    public function getPersonEditSessionID(): string
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(string $personEditSessionID): static
    {
        $new = clone $this;
        $new->personEditSessionID = $personEditSessionID;

        return $new;
    }

    public function getTemplateID(): string
    {
        return $this->templateID;
    }

    public function withTemplateID(string $templateID): static
    {
        $new = clone $this;
        $new->templateID = $templateID;

        return $new;
    }

    /**
     * @return mixed|null
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * @param mixed|null $value
     */
    public function withValue(mixed $value): static
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }
}
