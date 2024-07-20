<?php

namespace LazyTechwork\Parsec;

use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;
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
                )
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
