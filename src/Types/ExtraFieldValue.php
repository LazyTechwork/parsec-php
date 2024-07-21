<?php

namespace LazyTechwork\Parsec\Types;

class ExtraFieldValue extends BaseObject
{
    private Guid $TEMPLATE_ID;

    /**
     * @var mixed|null
     */
    private mixed $VALUE = null;

    public function getTEMPLATE_ID(): Guid
    {
        return $this->TEMPLATE_ID;
    }

    public function withTEMPLATE_ID(Guid $TEMPLATE_ID): static
    {
        $new = clone $this;
        $new->TEMPLATE_ID = $TEMPLATE_ID;

        return $new;
    }

    /**
     * @return mixed|null
     */
    public function getVALUE(): mixed
    {
        return $this->VALUE;
    }

    /**
     * @param mixed|null $VALUE
     */
    public function withVALUE(mixed $VALUE): static
    {
        $new = clone $this;
        $new->VALUE = $VALUE;

        return $new;
    }
}
