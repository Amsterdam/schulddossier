<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine(ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('http://swappams2694.basis.lan:8084/SOAP?service=LoginService', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Allegro/Login/Type')
    ->setTypeNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type')
    ->setClientDestination('src/Allegro/Login')
    ->setClientName('AllegroLoginClient')
    ->setClientNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login')
    ->setClassMapDestination('src/Allegro/Login')
    ->setClassMapName('AllegroLoginClassmap')
    ->setClassMapNamespace('GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login')
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
;
