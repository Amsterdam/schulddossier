<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClassmap;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Http\Adapter\Guzzle7\Client;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class SchuldHulpClientFactory
{
    public static function factory(string $wsdl, Organisatie $organisatie): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClient
    {
        $handler = HttPlugHandle::createForClient(
            Client::createWithConfig(['headers' => ['User-Agent' => 'fixxx-schuldhulp/1.0']])
        );

        $handler->addMiddleware(new SessionMiddleware($organisatie));

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])->withClassMap(AllegroSchuldHulpClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new AllegroSchuldHulpClient($engine, $eventDispatcher);
    }
}