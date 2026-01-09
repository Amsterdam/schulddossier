<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClassmap;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Http\Adapter\Guzzle7\Client;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Symfony\Component\EventDispatcher\EventDispatcher;

class LoginClientFactory
{
    public static function factory(
        string $wsdl,
        ?Organisatie $organisatie = null,
        ?string $proxyHost = null,
        ?string $proxyPort = null
    ): AllegroLoginClient {
        $config = ['headers' => ['User-Agent' => 'fixxx-schuldhulp/1.0']];

        if (null !== $proxyHost && null !== $proxyPort) {
            $config['proxy'] = 'http://' . $proxyHost . ':' . $proxyPort;
        }

        $handler = HttPlugHandle::createForClient(
            Client::createWithConfig($config)
        );

        if (null !== $organisatie) {
            $handler->addMiddleware(new SessionMiddleware($organisatie));
        }

        $streamContext = stream_context_create([
            'http' => [
                'proxy' => 'tcp://' . $proxyHost . ':' . $proxyPort,
                'request_fulluri' => true,
            ],
        ]);

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, ['stream_context' => $streamContext])->withClassMap(
                AllegroLoginClassmap::getCollection()
            ),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new AllegroLoginClient($engine, $eventDispatcher);
    }
}
