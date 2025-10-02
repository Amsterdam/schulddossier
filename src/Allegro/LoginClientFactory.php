<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClassmap;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Http\Adapter\Guzzle7\Client;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Soap\Encoding\EncoderRegistry;
use Symfony\Component\EventDispatcher\EventDispatcher;

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

        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdl)
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(AllegroLoginClassmap::types())
                        ->addBackedEnumClassMapCollection(AllegroLoginClassmap::enums())
                )
        );

        $eventDispatcher = new EventDispatcher();

        return new AllegroLoginClient($engine, $eventDispatcher);
    }
}
