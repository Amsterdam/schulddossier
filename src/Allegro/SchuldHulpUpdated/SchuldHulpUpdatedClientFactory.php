<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\AllegroHelper;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\SchuldHulpUpdatedClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\SchuldHulpUpdatedClassmap;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SessionMiddleware;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GuzzleHttp\Client;
use Http\Client\Common\PluginClient;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Psr18Transport\Psr18Transport;
use Http\Discovery\Psr18ClientDiscovery;
use Soap\Xml\Builder\SoapHeader;
use Symfony\Component\HttpClient\HttpClient;


class SchuldHulpUpdatedClientFactory
{
    public static function factory(
        string $wsdl,
        Organisatie $organisatie,
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): SchuldHulpUpdatedClient {

        if (!empty($proxyHostIp) && !empty($proxyHostPort)) {
            // TODO handler implementeren: https://gemeente-amsterdam.atlassian.net/browse/SCHUL-994
            // needs become a transporter: https://github.com/phpro/soap-client/blob/v2.0.0/UPGRADING.md#transport
            // $handler = AllegroHelper::createSoapClientHandler($organisatie, $proxyHostIp, $proxyHostPort);

            $httpClient = HttpClient::create([
                'proxy' => 'http://' . $proxyHostIp . ':' . $proxyHostPort
            ]);

            $transporter = Psr18Transport::createForClient(
                new PluginClient(
                    $httpClient,
                    [
                        new SoapHeader('User-Agent', 'fixxx-schuldhulp/1.0'),
                    ]
                )
            );

            $extSoapOptions = AllegroHelper::createSoapOptionsArray($proxyHostIp, $proxyHostPort);

            $engine = DefaultEngineFactory::create(
                ExtSoapOptions::defaults($wsdl, $extSoapOptions)
                    ->withClassMap(SchuldHulpUpdatedClassmap::getCollection()),
            );

            $eventDispatcher = new EventDispatcher();
            $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

            return new SchuldHulpUpdatedClient($caller);
        }

        $httpClient = Psr18ClientDiscovery::find();

        $transporter = Psr18Transport::createForClient(
            new PluginClient(
                $httpClient,
                [
                    new SoapHeader('User-Agent', 'fixxx-schuldhulp/1.0'),
                    new SessionMiddleware($organisatie)
                ]
            )
        );


        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(SchuldHulpUpdatedClassmap::getCollection()),
            $transporter
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new SchuldHulpUpdatedClient($caller);
    }
}

