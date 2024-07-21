<?php

namespace LazyTechwork\Parsec\Types;

use Phpro\SoapClient\Type\ResultInterface;

class SetPersonPhotoResponse implements ResultInterface
{
    private ?BaseResult $SetPersonPhotoResult = null;

    public function getSetPersonPhotoResult(): ?BaseResult
    {
        return $this->SetPersonPhotoResult;
    }

    public function withSetPersonPhotoResult(?BaseResult $SetPersonPhotoResult): static
    {
        $new = clone $this;
        $new->SetPersonPhotoResult = $SetPersonPhotoResult;

        return $new;
    }
}
