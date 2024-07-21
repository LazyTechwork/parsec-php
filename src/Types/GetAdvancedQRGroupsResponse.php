<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class GetAdvancedQRGroupsResponse implements ResultInterface
{
    private ?ArrayOfQRAdvancedGroup $GetAdvancedQRGroupsResult = null;

    public function getGetAdvancedQRGroupsResult(): ?ArrayOfQRAdvancedGroup
    {
        return $this->GetAdvancedQRGroupsResult;
    }

    public function withGetAdvancedQRGroupsResult(?ArrayOfQRAdvancedGroup $GetAdvancedQRGroupsResult): static
    {
        $new = clone $this;
        $new->GetAdvancedQRGroupsResult = $GetAdvancedQRGroupsResult;

        return $new;
    }
}
