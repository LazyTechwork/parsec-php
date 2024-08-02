<?php

namespace LazyTechwork\Parsec;

use LazyTechwork\Parsec\Encoders\ContextEnhancer;
use LazyTechwork\Parsec\Encoders\GuidEncoder;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;
use Soap\WsdlReader\Model\Definitions\SoapVersion;
use Soap\Xml\Xmlns;
use Symfony\Component\EventDispatcher\EventDispatcher;

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
                        ->addSimpleTypeConverter(Xmlns::xsd()->value(), 'anyType', new ContextEnhancer())
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
