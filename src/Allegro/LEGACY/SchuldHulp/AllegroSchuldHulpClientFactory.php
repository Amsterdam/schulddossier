<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class AllegroSchuldHulpClientFactory
{
    public static function factory(string $wsdl): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(AllegroSchuldHulpClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new AllegroSchuldHulpClient($engine, $eventDispatcher);
    }
}
