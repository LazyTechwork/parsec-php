<?php

namespace LazyTechwork\Parsec\Types;

class BioIdentifier extends BaseObject
{
    private string $IDENTIFIER_ID;

    private string $PERSON_ID;

    private ?string $SYSTEM_ID = null;

    private ?string $BIO_ID = null;

    /**
     * @var mixed|null
     */
    private mixed $BIO_DESCRIPTOR = null;

    public function getIDENTIFIER_ID(): string
    {
        return $this->IDENTIFIER_ID;
    }

    public function withIDENTIFIER_ID(string $IDENTIFIER_ID): static
    {
        $new = clone $this;
        $new->IDENTIFIER_ID = $IDENTIFIER_ID;

        return $new;
    }

    public function getPERSON_ID(): string
    {
        return $this->PERSON_ID;
    }

    public function withPERSON_ID(string $PERSON_ID): static
    {
        $new = clone $this;
        $new->PERSON_ID = $PERSON_ID;

        return $new;
    }

    public function getSYSTEM_ID(): ?string
    {
        return $this->SYSTEM_ID;
    }

    public function withSYSTEM_ID(?string $SYSTEM_ID): static
    {
        $new = clone $this;
        $new->SYSTEM_ID = $SYSTEM_ID;

        return $new;
    }

    public function getBIO_ID(): ?string
    {
        return $this->BIO_ID;
    }

    public function withBIO_ID(?string $BIO_ID): static
    {
        $new = clone $this;
        $new->BIO_ID = $BIO_ID;

        return $new;
    }

    /**
     * @return mixed|null
     */
    public function getBIO_DESCRIPTOR(): mixed
    {
        return $this->BIO_DESCRIPTOR;
    }

    /**
     * @param mixed|null $BIO_DESCRIPTOR
     */
    public function withBIO_DESCRIPTOR(mixed $BIO_DESCRIPTOR): static
    {
        $new = clone $this;
        $new->BIO_DESCRIPTOR = $BIO_DESCRIPTOR;

        return $new;
    }
}
