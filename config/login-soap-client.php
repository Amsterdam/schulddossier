<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Soap\DefaultEngineFactory;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults('doc/LoginService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Allegro/LoginUpdated/Type')
    ->setTypeNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type')
    ->setClientDestination('src/Allegro/LoginUpdated')
    ->setClientName('LoginServiceClient')
    ->setClientNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated')
    ->setClassMapDestination('src/Allegro/LoginUpdated')
    ->setClassMapName('LoginServiceClassmap')
    ->setClassMapNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
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
;
