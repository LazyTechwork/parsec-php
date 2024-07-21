<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetVisitorExtraFieldTemplatesResponse implements ResultInterface
{
    private ?ArrayOfPersonExtraFieldTemplate $GetVisitorExtraFieldTemplatesResult = null;

    public function getGetVisitorExtraFieldTemplatesResult(): ?ArrayOfPersonExtraFieldTemplate
    {
        return $this->GetVisitorExtraFieldTemplatesResult;
    }

    public function withGetVisitorExtraFieldTemplatesResult(?ArrayOfPersonExtraFieldTemplate $GetVisitorExtraFieldTemplatesResult): static
    {
        $new = clone $this;
        $new->GetVisitorExtraFieldTemplatesResult = $GetVisitorExtraFieldTemplatesResult;

        return $new;
    }
}
