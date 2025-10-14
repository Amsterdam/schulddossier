<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults('doc/modified_schuldhulpservice.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Allegro/AllegroSchuldHulp/Type')
    ->setTypeNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type')
    ->setClientDestination('src/Allegro/AllegroSchuldHulp')
    ->setClientName('AllegroSchuldHulpClient')
    ->setClientNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp')
    ->setClassMapDestination('src/Allegro/AllegroSchuldHulp')
    ->setClassMapName('AllegroSchuldHulpClassmap')
    ->setClassMapNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp')
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
