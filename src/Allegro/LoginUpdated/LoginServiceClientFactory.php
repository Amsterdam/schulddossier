<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\AllegroHelper;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\LoginServiceClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\LoginServiceClassmap;
use Http\Client\Common\PluginClient;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Psr18Transport\Psr18Transport;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Psr18Client;

class LoginServiceClientFactory
{
    public static function factory(
        string $wsdl,
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): LoginServiceClient {
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

        $transporter = Psr18Transport::createForClient(
            new PluginClient(
                $psr18Client
            )
        );

        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, $extSoapOptionsArray)
                ->withClassMap(LoginServiceClassmap::getCollection()),
            $transporter
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new LoginServiceClient($caller);
    }
}
