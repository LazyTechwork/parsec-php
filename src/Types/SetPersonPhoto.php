<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetPersonPhoto implements RequestInterface
{
    private string $personEditSessionID;

    /**
     * @var mixed|null
     */
    private mixed $photoByteArray = null;

    /**
     * Constructor.
     *
     * @param mixed|null $photoByteArray
     */
    public function __construct(string $personEditSessionID, mixed $photoByteArray)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->photoByteArray = $photoByteArray;
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

    /**
     * @return mixed|null
     */
    public function getPhotoByteArray(): mixed
    {
        return $this->photoByteArray;
    }

    /**
     * @param mixed|null $photoByteArray
     */
    public function withPhotoByteArray(mixed $photoByteArray): static
    {
        $new = clone $this;
        $new->photoByteArray = $photoByteArray;

        return $new;
    }
}
