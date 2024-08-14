<?php

namespace LazyTechwork\Parsec;

use GoetasWebservices\XML\XSDReader\Exception\TypeException;
use GoetasWebservices\XML\XSDReader\Schema\Exception\SchemaException;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\CachedEngine\CachedEngine;
use Soap\Encoding\Driver;
use Soap\Engine\Engine;
use Soap\Engine\LazyEngine;
use Soap\Engine\SimpleEngine;
use Soap\WsdlReader\Parser\Wsdl1Parser;
use VeeWee\Xml\Dom\Document;
use function Psl\Type\non_empty_string;
use function VeeWee\Xml\Dom\Configurator\document_uri;

final class ParsecEngineFactory
{
    public static function create(
        EngineOptions $options
    ): Engine {
        $cache = $options->getCache();
        $factory = static fn (): Engine => self::configureEngine($options);

        return match (true) {
            $cache->isSome() => new CachedEngine($cache->unwrap(), $options->getCacheConfig(), $factory),
            default => new LazyEngine($factory),
        };
    }

    private static function buildUrl(array $urlComponents): string
    {
        $scheme = isset($urlComponents['scheme']) ? $urlComponents['scheme'].'://' : '';
        $host = $urlComponents['host'] ?? '';
        $port = isset($urlComponents['port']) ? ':'.$urlComponents['port'] : '';
        $user = $urlComponents['user'] ?? '';
        $pass = isset($urlComponents['pass']) ? ':'.$urlComponents['pass'] : '';
        $pass = ($user || $pass) ? "{$pass}@" : '';
        $path = $urlComponents['path'] ?? '';
        $query = isset($urlComponents['query']) ? '?'.$urlComponents['query'] : '';
        $fragment = isset($urlComponents['fragment']) ? '#'.$urlComponents['fragment'] : '';

        return sprintf('%s%s%s%s%s%s%s%s', $scheme, $user, $pass, $host, $port, $path, $query, $fragment);
    }

    /**
     * @throws TypeException
     * @throws SchemaException
     */
    private static function configureEngine(EngineOptions $options): Engine
    {
        $wsdlBaseUrl = parse_url($options->getWsdl());
        unset($wsdlBaseUrl['query'], $wsdlBaseUrl['fragment']);
        $wsdlBaseUrl = self::buildUrl($wsdlBaseUrl);

        $context = $options->getWsdlParserContext();
        $wsdlContent = preg_replace('/http(?:s)?:\/\/.+\/IntegrationService\/IntegrationService\.asmx/u', $wsdlBaseUrl, ($options->getWsdlLoader())($options->getWsdl()));
        $wsdlDocument = Document::fromXmlString(
            non_empty_string()->assert($wsdlContent),
            document_uri($options->getWsdl())
        );

        $wsdl = (new Wsdl1Parser())($wsdlDocument, $context);

        $driver = Driver::createFromWsdl1(
            $wsdl,
            $options->getWsdlServiceSelectionCriteria(),
            $options->getEncoderRegistry()
        );

        return new SimpleEngine(
            $driver,
            $options->getTransport()
        );
    }
}
