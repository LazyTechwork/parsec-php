<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetPersonExtraFieldTemplatesResponse implements ResultInterface
{
    private ?ArrayOfPersonExtraFieldTemplate $GetPersonExtraFieldTemplatesResult = null;

    public function getGetPersonExtraFieldTemplatesResult(): ?ArrayOfPersonExtraFieldTemplate
    {
        return $this->GetPersonExtraFieldTemplatesResult;
    }

    public function withGetPersonExtraFieldTemplatesResult(?ArrayOfPersonExtraFieldTemplate $GetPersonExtraFieldTemplatesResult): static
    {
        $new = clone $this;
        $new->GetPersonExtraFieldTemplatesResult = $GetPersonExtraFieldTemplatesResult;

        return $new;
    }
}
