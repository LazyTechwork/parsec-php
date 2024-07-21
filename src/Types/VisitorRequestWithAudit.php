<?php

namespace LazyTechwork\Parsec\Types;

class VisitorRequestWithAudit extends VisitorRequest
{
    private string $ISSUER_ID;

    private \DateTimeInterface $RVISION_DATE;

    private string $REVISOR_ID;

    private ?string $REVISOR_COMMENTS = null;

    private \DateTimeInterface $ACTIVATE_DATE;

    private string $ACTIVATOR_ID;

    public function getISSUER_ID(): string
    {
        return $this->ISSUER_ID;
    }

    public function withISSUER_ID(string $ISSUER_ID): static
    {
        $new = clone $this;
        $new->ISSUER_ID = $ISSUER_ID;

        return $new;
    }

    public function getRVISION_DATE(): \DateTimeInterface
    {
        return $this->RVISION_DATE;
    }

    public function withRVISION_DATE(\DateTimeInterface $RVISION_DATE): static
    {
        $new = clone $this;
        $new->RVISION_DATE = $RVISION_DATE;

        return $new;
    }

    public function getREVISOR_ID(): string
    {
        return $this->REVISOR_ID;
    }

    public function withREVISOR_ID(string $REVISOR_ID): static
    {
        $new = clone $this;
        $new->REVISOR_ID = $REVISOR_ID;

        return $new;
    }

    public function getREVISOR_COMMENTS(): ?string
    {
        return $this->REVISOR_COMMENTS;
    }

    public function withREVISOR_COMMENTS(?string $REVISOR_COMMENTS): static
    {
        $new = clone $this;
        $new->REVISOR_COMMENTS = $REVISOR_COMMENTS;

        return $new;
    }

    public function getACTIVATE_DATE(): \DateTimeInterface
    {
        return $this->ACTIVATE_DATE;
    }

    public function withACTIVATE_DATE(\DateTimeInterface $ACTIVATE_DATE): static
    {
        $new = clone $this;
        $new->ACTIVATE_DATE = $ACTIVATE_DATE;

        return $new;
    }

    public function getACTIVATOR_ID(): string
    {
        return $this->ACTIVATOR_ID;
    }

    public function withACTIVATOR_ID(string $ACTIVATOR_ID): static
    {
        $new = clone $this;
        $new->ACTIVATOR_ID = $ACTIVATOR_ID;

        return $new;
    }
}
