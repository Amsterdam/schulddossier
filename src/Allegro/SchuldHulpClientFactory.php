<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClassmap;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class SchuldHulpClientFactory
{
    public static function factory(
        string $wsdl,
        Organisatie $organisatie,
        ?string $proxyHost = null,
        ?string $proxyPort = null
    ): AllegroSchuldHulpClient
    {
        $handler = AllegroHelper::createSoapClientHandler($organisatie, $proxyHost, $proxyPort);

        $extSoapOptions = AllegroHelper::createSoapOptionsArray($proxyHost, $proxyPort);

        $extSoapOptions = AllegroHelper::createSoapOptionsArray($proxyHost, $proxyPort);

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, $extSoapOptions)->withClassMap(AllegroSchuldHulpClassmap::getCollection()),
            $handler
        );

        $eventDispatcher = new EventDispatcher();

        return new AllegroSchuldHulpClient($engine, $eventDispatcher);
    }
}
