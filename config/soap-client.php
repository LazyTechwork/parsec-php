<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Soap\Wsdl\Loader\FlatteningLoader;
use Soap\Wsdl\Loader\StreamWrapperLoader;

return Config::create()
    ->setEngine($engine = Phpro\SoapClient\Soap\DefaultEngineFactory::create(
        Phpro\SoapClient\Soap\EngineOptions::defaults('http://172.28.80.1:10101/IntegrationService/IntegrationService.asmx?WSDL')
            ->withWsdlLoader(new FlatteningLoader(new StreamWrapperLoader()))
    ))
    ->setTypeDestination('src/Types')
    ->setTypeNamespace('LazyTechwork\\Parsec\\Types')
    ->setClientDestination('src')
    ->setClientName('ParsecClient')
    ->setClientNamespace('LazyTechwork\\Parsec')
    ->setClassMapDestination('src')
    ->setClassMapName('ParsecClassmap')
    ->setClassMapNamespace('LazyTechwork\\Parsec')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(
        (new Assembler\GetterAssemblerOptions())->withBoolGetters()
    )))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
    ->addRule(
        new Rules\IsExtendingTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\ExtendingTypeAssembler())
        )
    )
    ->addRule(
        new Rules\IsAbstractTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\AbstractClassAssembler())
        )
    )
;
