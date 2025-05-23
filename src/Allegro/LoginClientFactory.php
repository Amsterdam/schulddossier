<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClassmap;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Http\Adapter\Guzzle7\Client;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;


class LoginClientFactory
{
    public static function factory(
        string $wsdl,
        ?Organisatie $organisatie = null
    ): AllegroLoginClient {
        $handler = HttPlugHandle::createForClient(
            Client::createWithConfig(['headers' => ['User-Agent' => 'fixxx-schuldhulp/1.0']])
        );


        if (null !== $organisatie) {
            $handler->addMiddleware(new SessionMiddleware($organisatie));
        }

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])->withClassMap(AllegroLoginClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new AllegroLoginClient($engine, $eventDispatcher);
    }
}