<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClassmap;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Http\Client\Common\PluginClient;

use Soap\ExtSoapEngine\ExtSoapEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Middleware\SoapHeaderMiddleware;
use Soap\Psr18Transport\Psr18Transport;
use Soap\Xml\Builder\SoapHeader;
use Symfony\Component\EventDispatcher\EventDispatcher;


class LoginClientFactory
{
    public static function factory(
        string $wsdl,
        ?Organisatie $organisatie = null
    ): AllegroLoginClient {
        $middleware = [];

        if (null !== $organisatie) {
            $middleware[] = new SoapHeaderMiddleware(
                new SoapHeader(
                    'http://tempuri.org/',
                    'ROClientIDHeader',
                    ['ID' => $organisatie->getAllegroSessionId()]
                )
            );
        }

        // Create the Guzzle client with the custom stack
        $guzzle = new \GuzzleHttp\Client([
            'headers' => ['User-Agent' => 'fixxx-schuldhulp/1.0'],
        ]);

        // Pass the Guzzle client to Psr18Transport
        $handler = Psr18Transport::createForClient(
            new PluginClient(
                $guzzle,
                $middleware
            )
        );

        $engine = ExtSoapEngineFactory::fromOptionsWithTransport(
            ExtSoapOptions::defaults($wsdl, [])->withClassMap(AllegroLoginClassmap::getCollection()),
            $handler
        );

        $eventDispatcher = new EventDispatcher();
        return new AllegroLoginClient($engine, $eventDispatcher);
    }
}