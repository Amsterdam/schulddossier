<?php

use Phpro\SoapClient\CodeGenerator\Rules\AssembleRule;
use Phpro\SoapClient\CodeGenerator\Assembler\GetterAssembler;
use Phpro\SoapClient\CodeGenerator\Assembler\GetterAssemblerOptions;
use Phpro\SoapClient\CodeGenerator\Assembler\ImmutableSetterAssembler;
use Phpro\SoapClient\CodeGenerator\Rules\TypenameMatchesRule;
use Phpro\SoapClient\CodeGenerator\Rules\MultiRule;
use Phpro\SoapClient\CodeGenerator\Assembler\RequestAssembler;
use Phpro\SoapClient\CodeGenerator\Assembler\ConstructorAssembler;
use Phpro\SoapClient\CodeGenerator\Assembler\ConstructorAssemblerOptions;
use Phpro\SoapClient\CodeGenerator\Assembler\ResultAssembler;
use Phpro\SoapClient\CodeGenerator\Assembler\ExtendAssembler;
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
    ->addRule(new AssembleRule(new GetterAssembler(new GetterAssemblerOptions())))
    ->addRule(new AssembleRule(new ImmutableSetterAssembler()))
    ->addRule(
        new TypenameMatchesRule(
            new MultiRule([
                new AssembleRule(new RequestAssembler()),
                new AssembleRule(new ConstructorAssembler(new ConstructorAssemblerOptions())),
            ]),
            '/(?<!Response)$/i'
        )
    )
    ->addRule(
        new TypenameMatchesRule(
            new MultiRule([
                new AssembleRule(new ResultAssembler()),
            ]),
            '/Response$/i'
        )
    )
    ->addRule(
        new TypenameMatchesRule(
            new MultiRule([
                new AssembleRule(new ExtendAssembler('\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag')),
            ]),
            '/TAanvraag2SR/'
        )
    )
;
