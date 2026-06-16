<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\SchuldHulpUpdatedClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\SchuldHulpUpdatedClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Encoding\EncoderRegistry;
use Symfony\Component\HttpClient\Psr18Client;
use Symfony\Component\HttpClient\HttpClient;
use Soap\Psr18Transport\Psr18Transport;
use Http\Client\Common\PluginClient;
use Soap\Psr18Transport\Wsdl\Psr18Loader;
use Soap\Psr18Transport\Middleware\SoapHeaderMiddleware;
use Soap\Xml\Builder\SoapHeader;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;

use function VeeWee\Xml\Dom\Builder\children;
use function VeeWee\Xml\Dom\Builder\namespaced_element;
use function VeeWee\Xml\Dom\Builder\value;

class SchuldHulpUpdatedClientFactory
{
    /**
     * @param non-empty-string $wsdl
     */
    public static function factory(
        string $wsdl,
        Organisatie $organisatie
    ): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\SchuldHulpUpdatedClient {

        $httpClient = HttpClient::create([
            'headers' => [
                'User-Agent' => 'fixxx-schuldhulp/1.0'
            ]
        ]);

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
            EngineOptions::defaults($wsdl)
                ->withWsdlLoader(Psr18Loader::createForClient($psr18Client))
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(SchuldHulpUpdatedClassmap::types())
                        ->addBackedEnumClassMapCollection(SchuldHulpUpdatedClassmap::enums())
                )
                ->withTransport($transporter)
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new SchuldHulpUpdatedClient($caller);
    }
}
