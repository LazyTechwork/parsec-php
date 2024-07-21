<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetPersonExtraFieldValue implements RequestInterface
{
    private Guid $personEditSessionID;

    private Guid $templateID;

    /**
     * @var mixed|null
     */
    private mixed $value = null;

    /**
     * Constructor.
     *
     * @param mixed|null $value
     */
    public function __construct(Guid $personEditSessionID, Guid $templateID, mixed $value)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->templateID = $templateID;
        $this->value = $value;
    }

    public function getPersonEditSessionID(): Guid
    {
        return $this->personEditSessionID;
    }

    public function withPersonEditSessionID(Guid $personEditSessionID): static
    {
        $new = clone $this;
        $new->personEditSessionID = $personEditSessionID;

        return $new;
    }

    public function getTemplateID(): Guid
    {
        return $this->templateID;
    }

    public function withTemplateID(Guid $templateID): static
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
