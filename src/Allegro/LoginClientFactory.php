<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClassmap;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\AllegroLoginClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Symfony\Component\EventDispatcher\EventDispatcher;

class LoginClientFactory
{
    public static function factory(
        string $wsdl,
        ?Organisatie $organisatie = null,
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): AllegroLoginClient {
        $extSoapOptionsArray = AllegroHelper::createSoapOptionsArray($proxyHostIp, $proxyHostPort);

        $handler = AllegroHelper::createSoapClientHandler($organisatie, $proxyHostIp, $proxyHostPort);

        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, $extSoapOptionsArray)->withClassMap(
                AllegroLoginClassmap::getCollection()
            ),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new AllegroLoginClient($engine, $eventDispatcher);
    }
}
