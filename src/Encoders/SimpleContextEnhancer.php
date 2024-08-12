<?php

namespace LazyTechwork\Parsec\Encoders;

use Soap\Encoding\Encoder\Context;
use Soap\Encoding\Encoder\Feature\ElementContextEnhancer;
use Soap\Encoding\Encoder\XmlEncoder;
use Soap\WsdlReader\Model\Definitions\BindingUse;
use VeeWee\Reflecta\Iso\Iso;

class SimpleContextEnhancer implements ElementContextEnhancer, XmlEncoder
{
    public function iso(Context $context): Iso
    {
        return $context->registry->findSimpleEncoderByXsdType($context->type)->iso($context);
    }

    /**
     * This method allows to change the context on the wrapping elementEncoder.
     * By forcing the bindingUse to `ENCODED`, we can make sure the xsi:type attribute is added.
     */
    public function enhanceElementContext(Context $context): Context
    {
        return $context->withBindingUse(BindingUse::ENCODED);
    }
}
