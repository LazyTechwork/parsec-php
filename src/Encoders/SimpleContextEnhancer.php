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
use Soap\Xml\Xmlns;
use VeeWee\Reflecta\Iso\Iso;

class SimpleContextEnhancer implements ElementContextEnhancer, XmlEncoder
{
    public function iso(Context $context): Iso
    {
        $context = $context->withBindingUse(BindingUse::ENCODED);

        return new Iso(
            fn (mixed $value): string => $this->to($context, $value),
            fn (Element|string $value): object => $this->from($context, $value)
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

    public function resolveXsiType(Context $context, mixed $value): Context
    {
        $xsd = Xmlns::xsd()->value();
        $resolvedType = null;

        if (is_a($value, DateTime::class)) {
            $resolvedType = $context->type->copy('dateTime')
                ->withXmlTypeName('dateTime')
                ->withXmlNamespaceName($context->namespaces->lookupNameFromNamespace($xsd)->unwrap())
                ->withXmlNamespace($xsd);
        }

        if (is_a($value, Date::class)) {
            $resolvedType = $context->type->copy('date')
                ->withXmlTypeName('date')
                ->withXmlNamespaceName($context->namespaces->lookupNameFromNamespace($xsd)->unwrap())
                ->withXmlNamespace($xsd);
        }

        if ($resolvedType !== null) {
            return $context->withType($resolvedType);
        }

        return $context;
    }

    private function to(Context $context, mixed $value): string
    {
        if (is_a($value, DateTime::class)) {
            return (new DateTimeTypeEncoder(DateTimeTypeEncoder::DATE_FORMAT_TIME_ZONED))
                ->iso($this->enhanceElementContext($context))
                ->to($value->dateTime);
        }

        if (is_a($value, Date::class)) {
            return (new DateTypeEncoder(DateTypeEncoder::DATE_FORMAT_LOCAL))
                ->iso($this->enhanceElementContext($context))
                ->to($value->date);
        }

        return (new ScalarTypeEncoder())->iso($context)->to($value);
    }

    private function from(Context $context, Element|string $value): object
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
