<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Rules\IsRequestRule;
use Phpro\SoapClient\CodeGenerator\Rules\IsResultRule;
use Phpro\SoapClient\Soap\CodeGeneratorEngineFactory;
use Soap\Wsdl\Loader\FlatteningLoader;
use Soap\Wsdl\Loader\StreamWrapperLoader;

return Config::create()
    ->setEngine($engine = CodeGeneratorEngineFactory::create(
    'doc/updated_modified_SchuldHulpService.wsdl',
    new FlatteningLoader(new StreamWrapperLoader())
    ))
    ->setTypeDestination('src/Allegro/SchuldHulpUpdated/Type')
    ->setTypeNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type')
    ->setClientDestination('src/Allegro/SchuldHulpUpdated')
    ->setClientName('SchuldHulpUpdatedClient')
    ->setClientNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated')
    ->setClassMapDestination('src/Allegro/SchuldHulpUpdated')
    ->setClassMapName('SchuldHulpUpdatedClassmap')
    ->setClassMapNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
;
