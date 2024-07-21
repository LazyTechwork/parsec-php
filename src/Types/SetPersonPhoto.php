<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class SetPersonPhoto implements RequestInterface
{
    private Guid $personEditSessionID;

    /**
     * @var mixed|null
     */
    private mixed $photoByteArray = null;

    /**
     * Constructor.
     *
     * @param mixed|null $photoByteArray
     */
    public function __construct(Guid $personEditSessionID, mixed $photoByteArray)
    {
        $this->personEditSessionID = $personEditSessionID;
        $this->photoByteArray = $photoByteArray;
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
