<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use Http\Adapter\Guzzle7\Client;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use Phpro\SoapClient\Soap\Handler\HandlerInterface;

class AllegroHelper
{
    /**
     * Creates a SOAP options array with optional proxy settings.
     *
     * @param string|null $proxyHostIp The proxy host (IP or domain).
     * @param string|null $proxyHostPort The proxy port.
     * @return array The SOAP options array.
     */
    public static function createSoapOptionsArray(
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): array
    {
        $soapOptionsArray = [];

        if (isset($proxyHostIp, $proxyHostPort)) {
            $streamContext = stream_context_create([
                'http' => [
                    'proxy' => 'tcp://' . $proxyHostIp . ':' . $proxyHostPort,
                    'request_fulluri' => true,
                ],
            ]);

            $soapOptionsArray['stream_context'] = $streamContext;
        }

        return $soapOptionsArray;
    }

    /**
     * Creates a SOAP client configuration array with optional proxy settings.
     *
     * @param string|null $proxyHostIp The proxy host (IP or domain).
     * @param string|null $proxyHostPort The proxy port.
     * @return array The SOAP client configuration array.
     */
    public static function createSoapClientConfig(
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): array
    {
        $config = ['headers' => ['User-Agent' => 'fixxx-schuldhulp/1.0']];

        if (isset($proxyHostIp, $proxyHostPort)) {
            $config['proxy'] = 'http://' . $proxyHostIp . ':' . $proxyHostPort;
        }

        return $config;
    }

    /**
     * Creates a SOAP client handler with optional proxy and session middleware.
     *
     * @param Organisatie|null $organisatie The organization for session middleware.
     * @param string|null $proxyHostIp The proxy host (IP or domain).
     * @param string|null $proxyHostPort The proxy port.
     * @return HandlerInterface The configured SOAP client handler.
     */
    public static function createSoapClientHandler(
        ?Organisatie $organisatie = null,
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ) : HandlerInterface
    {
        $config = AllegroHelper::createSoapClientConfig($proxyHostIp, $proxyHostPort);

        $handler = HttPlugHandle::createForClient(
            Client::createWithConfig($config)
        );

        if (isset($organisatie)) {
            $handler->addMiddleware(new SessionMiddleware($organisatie));
        }

        return $handler;
    }
}
