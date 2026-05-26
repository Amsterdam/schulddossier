<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\LoginServiceClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\LoginServiceClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Encoding\EncoderRegistry;
use Soap\Psr18Transport\Psr18Transport;
use Http\Client\Common\PluginClient;
use Symfony\Component\HttpClient\Psr18Client;
use Symfony\Component\HttpClient\HttpClient;
use Soap\Psr18Transport\Wsdl\Psr18Loader;


class LoginServiceClientFactory
{
    /**
     * @param non-empty-string $wsdl
     */
    public static function factory(
        string $wsdl,     
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\LoginServiceClient{
        if (!empty($proxyHostIp) && !empty($proxyHostPort)) {

            $httpClient = HttpClient::create([
                'proxy' => 'http://' . $proxyHostIp . ':' . $proxyHostPort,
                'headers' => [
                    'User-Agent' => 'fixxx-schuldhulp/1.0'
                ]
            ]);
         
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
            EngineOptions::defaults($wsdl)
                ->withWsdlLoader(Psr18Loader::createForClient($psr18Client))
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(LoginServiceClassmap::types())
                        ->addBackedEnumClassMapCollection(LoginServiceClassmap::enums())
                )
                ->withTransport($transporter)
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new LoginServiceClient($caller);
    }
}

