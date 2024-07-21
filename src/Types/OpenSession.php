<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\RequestInterface;

class OpenSession implements RequestInterface
{
    private ?string $domain = null;

    private ?string $userName = null;

    private ?string $password = null;

    /**
     * Constructor.
     */
    public function __construct(?string $domain, ?string $userName, ?string $password)
    {
        $this->domain = $domain;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function withDomain(?string $domain): static
    {
        $new = clone $this;
        $new->domain = $domain;

        return $new;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function withUserName(?string $userName): static
    {
        $new = clone $this;
        $new->userName = $userName;

        return $new;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function withPassword(?string $password): static
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }
}
