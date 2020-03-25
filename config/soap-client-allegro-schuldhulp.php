<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine(ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('/srv/app/doc/modified_schuldhulpservice.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Allegro/SchuldHulp/Type')
    ->setTypeNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type')
    ->setClientDestination('src/Allegro/SchuldHulp')
    ->setClientName('AllegroSchuldHulpClient')
    ->setClientNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp')
    ->setClassMapDestination('src/Allegro/SchuldHulp')
    ->setClassMapName('AllegroSchuldHulpClassmap')
    ->setClassMapNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ]),
            '/(?<!Response)$/i'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ]),
            '/Response$/i'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ExtendAssembler('\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag')),
            ]),
            '/TAanvraag2SR/'
        )
    )
;
