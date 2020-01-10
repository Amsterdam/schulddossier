<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClassmap;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use Http\Adapter\Guzzle6\Client;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class LoginClientFactory
{
    public static function factory(string $wsdl, Schuldhulpbureau $bureau = null): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient
    {
        $handler = HttPlugHandle::createForClient(
            Client::createWithConfig(['headers' => ['User-Agent' => 'fixxx-schuldhulp/1.0']])
        );

        if (null !== $bureau) {
            $handler->addMiddleware(new SessionMiddleware($bureau));
        }

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])->withClassMap(AllegroLoginClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new AllegroLoginClient($engine, $eventDispatcher);
    }
}