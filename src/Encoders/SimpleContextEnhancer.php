<?php

namespace LazyTechwork\Parsec\Encoders;

use LazyTechwork\Parsec\Types\Date;
use LazyTechwork\Parsec\Types\DateTime;
use Soap\Encoding\Encoder\Context;
use Soap\Encoding\Encoder\Feature\ElementContextEnhancer;
use Soap\Encoding\Encoder\SimpleType\DateTimeTypeEncoder;
use Soap\Encoding\Encoder\SimpleType\DateTypeEncoder;
use Soap\Encoding\Encoder\SimpleType\ScalarTypeEncoder;
use Soap\Encoding\Encoder\XmlEncoder;
use Soap\Encoding\Xml\Node\Element;
use Soap\Engine\Metadata\Model\XsdType;
use Soap\WsdlReader\Model\Definitions\BindingUse;
use VeeWee\Reflecta\Iso\Iso;

class SimpleContextEnhancer implements ElementContextEnhancer, XmlEncoder
{
    public function iso(Context $context): Iso
    {
        return new Iso(
            fn (object|array $value): string => $this->to($context, $value),
            fn (string|Element $value): object => $this->from($context, $value)
        );
    }

    /**
     * This method allows to change the context on the wrapping elementEncoder.
     * By forcing the bindingUse to `ENCODED`, we can make sure the xsi:type attribute is added.
     */
    public function enhanceElementContext(Context $context): Context
    {
        return $context->withBindingUse(BindingUse::ENCODED);
    }

    private function to(Context $context, mixed $value): string
    {
        if (is_a($value, DateTime::class)) {
            return (new DateTimeTypeEncoder(DateTimeTypeEncoder::DATE_FORMAT_TIME_ZONED))->iso($context
                ->withBindingUse(BindingUse::ENCODED)
                ->withType($context->type->copy('dateTime')))
                ->to($value->dateTime);
        }

        if (is_a($value, Date::class)) {
            return (new DateTypeEncoder(DateTypeEncoder::DATE_FORMAT_LOCAL))->iso($context
                ->withBindingUse(BindingUse::ENCODED)
                ->withType($context->type->copy('date')))
                ->to($value->date);
        }

        return (new ScalarTypeEncoder())->iso($context)->to($value);
    }

    private function from(Context $context, string|Element $value): object
    {
        if ($value instanceof Element) {
            return $context->registry
                ->findSimpleEncoderByXsdType(XsdType::guess($value
                    ->element()
                    ->getAttributeNS('xsi', 'type')
                ))
                ->iso($context)
                ->from($value);
        }

        return (new ScalarTypeEncoder())->iso($context)->from($value);
    }
}
