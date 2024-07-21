<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetVisitorRequestWithAuditResponse implements ResultInterface
{
    private ?VisitorRequestWithAudit $GetVisitorRequestWithAuditResult = null;

    public function getGetVisitorRequestWithAuditResult(): ?VisitorRequestWithAudit
    {
        return $this->GetVisitorRequestWithAuditResult;
    }

    public function withGetVisitorRequestWithAuditResult(?VisitorRequestWithAudit $GetVisitorRequestWithAuditResult): static
    {
        $new = clone $this;
        $new->GetVisitorRequestWithAuditResult = $GetVisitorRequestWithAuditResult;

        return $new;
    }
}
