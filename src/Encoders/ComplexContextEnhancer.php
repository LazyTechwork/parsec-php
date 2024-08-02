<?php

namespace LazyTechwork\Parsec\Encoders;

use LazyTechwork\Parsec\ParsecInvertedClassmap;
use Soap\Encoding\Encoder\Context;
use Soap\Encoding\Encoder\ObjectEncoder;
use Soap\Encoding\Encoder\XmlEncoder;
use Soap\Encoding\Xml\Node\Element;
use Soap\WsdlReader\Model\Definitions\BindingUse;
use VeeWee\Reflecta\Iso\Iso;

class ComplexContextEnhancer implements XmlEncoder
{
    public function __construct(private readonly string $baseClass)
    {
    }

    public function iso(Context $context): Iso
    {
        return new Iso(
            fn (object|array $value): string => $this->getEncoder($context, $value)->to($value),
            fn (string|Element $value): object => (new ObjectEncoder($this->baseClass))->iso($context)->from($value)
        );
    }

    private function getEncoder(Context $context, mixed $value): Iso
    {
        if (is_a($value, $this->baseClass)) {
            return (new ObjectEncoder($this->baseClass))->iso($context
                ->withBindingUse(BindingUse::ENCODED)
                ->withType($context->type->copy(ParsecInvertedClassmap::getCollection()[get_class($value)]->getName())));
        }

        return (new ObjectEncoder($this->baseClass))->iso($context);
    }
}
