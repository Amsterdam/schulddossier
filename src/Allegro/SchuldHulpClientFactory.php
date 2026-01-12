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
    public static function factory(
        string $wsdl, 
        Organisatie $organisatie, 
        ?string $proxyHost = null, 
        ?string $proxyPort = null
    ): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\AllegroSchuldHulpClient
    {
        $config = ['headers' => ['User-Agent' => 'fixxx-schuldhulp/1.0']];

        if (null !== $proxyHost && null !== $proxyPort) {
            $config['proxy'] = 'http://' . $proxyHost . ':' . $proxyPort;
        }

        $handler = HttPlugHandle::createForClient(
            Client::createWithConfig($config)
        );

        $handler->addMiddleware(new SessionMiddleware($organisatie));

        $streamContext = stream_context_create([
            'http' => [
                'proxy' => 'tcp://' . $proxyHost . ':' . $proxyPort,
                'request_fulluri' => true,
            ],
        ]);


        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, ['stream_context' => $streamContext])->withClassMap(AllegroSchuldHulpClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new AllegroSchuldHulpClient($engine, $eventDispatcher);
    }
}