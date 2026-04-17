<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Soap\DefaultEngineFactory;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults('doc/updated_modified_SchuldHulpService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Allegro/SchuldHulpUpdated/Type')
    ->setTypeNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type')
    ->setClientDestination('src/Allegro/SchuldHulpUpdated')
    ->setClientName('SchuldHulpUpdatedClient')
    ->setClientNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated')
    ->setClassMapDestination('src/Allegro/SchuldHulpUpdated')
    ->setClassMapName('SchuldHulpUpdatedClassmap')
    ->setClassMapNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated')
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
