<?php

namespace LazyTechwork\Parsec\TypeReplacers;

use Phpro\SoapClient\Soap\Metadata\Manipulators\TypeReplacer\TypeReplacer;
use Soap\Engine\Metadata\Model\XsdType;
use Soap\WsdlReader\Metadata\Predicate\IsOfType;

class GuidTypeReplacer implements TypeReplacer
{
    public function __invoke(XsdType $xsdType): XsdType
    {
        $check = new IsOfType('http://microsoft.com/wsdl/types/', 'guid');

        if (!$check($xsdType)) {
            return $xsdType;
        }

        return $xsdType->copy('guid')->withBaseType('guid');
    }
}
