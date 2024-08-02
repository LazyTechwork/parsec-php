<?php

namespace LazyTechwork\Parsec;

use LazyTechwork\Parsec\Encoders\GuidEncoder;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\Encoder\Context;
use Soap\Encoding\Encoder\Feature\ElementContextEnhancer;
use Soap\Encoding\Encoder\SimpleType\ScalarTypeEncoder;
use Soap\Encoding\Encoder\XmlEncoder;
use Soap\Encoding\EncoderRegistry;
use Soap\WsdlReader\Model\Definitions\BindingUse;
use Soap\WsdlReader\Model\Definitions\SoapVersion;
use Symfony\Component\EventDispatcher\EventDispatcher;
use VeeWee\Reflecta\Iso\Iso;

class ParsecClientFactory
{
    public static function factory(string $wsdl): ParsecClient
    {
        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdl)
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(ParsecClassmap::getCollection())
                        ->addSimpleTypeConverter(
                            'http://microsoft.com/wsdl/types/',
                            'guid',
                            new GuidEncoder()
                        )
                        ->addSimpleTypeConverter(
                            'http://www.w3.org/2001/XMLSchema',
                            'anyType',
                            new class() implements ElementContextEnhancer, XmlEncoder {
                                public function iso(Context $context): Iso
                                {
                                    return (new ScalarTypeEncoder())->iso($context);
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
                        )
                )
                ->withPreferredSoapVersion(SoapVersion::SOAP_12)

            // If you want to enable WSDL caching:
            // ->withCache()
            // If you want to use Alternate HTTP settings:
            // ->withWsdlLoader()
            // ->withTransport()
            // If you want specific SOAP setting:
            // ->withWsdlParserContext()
            // ->withPreferredSoapVersion()
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new ParsecClient($caller);
    }
}
