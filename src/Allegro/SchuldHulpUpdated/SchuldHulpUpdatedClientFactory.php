<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\AllegroHelper;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Http\Client\Common\PluginClient;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Psr18Transport\Psr18Transport;
use Soap\Psr18Transport\Middleware\SoapHeaderMiddleware;
use Soap\Xml\Builder\SoapHeader;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Psr18Client;

use function VeeWee\Xml\Dom\Builder\children;
use function VeeWee\Xml\Dom\Builder\namespaced_element;
use function VeeWee\Xml\Dom\Builder\value;

class SchuldHulpUpdatedClientFactory
{
    public static function factory(
        string $wsdl,
        Organisatie $organisatie,
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): SchuldHulpUpdatedClient {
        $extSoapOptionsArray = [];

        if (!empty($proxyHostIp) && !empty($proxyHostPort)) {
            $httpClient = HttpClient::create([
                'proxy' => 'http://' . $proxyHostIp . ':' . $proxyHostPort,
                'headers' => [
                    'User-Agent' => 'fixxx-schuldhulp/1.0'
                ]
            ]);
            $extSoapOptionsArray = AllegroHelper::createSoapOptionsArray($proxyHostIp, $proxyHostPort);
        } else {
            $httpClient = HttpClient::create([
                'headers' => [
                    'User-Agent' => 'fixxx-schuldhulp/1.0'
                ]
            ]);
        }

        $psr18Client = new Psr18Client($httpClient);

        $tns = 'http://tempuri.org/';
        $transporter = Psr18Transport::createForClient(
            new PluginClient(
                $psr18Client,
                [
                    new SoapHeaderMiddleware(
                        new SoapHeader(
                            $tns,
                            'ROClientIDHeader',
                            children(
                                namespaced_element($tns, 'ID', value($organisatie->getAllegroSessionId())),
                            )
                        )
                    )
                ]
            )
        );

        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, $extSoapOptionsArray)
                ->withClassMap(SchuldHulpUpdatedClassmap::getCollection()),
            $transporter
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new SchuldHulpUpdatedClient($caller);
    }
}

