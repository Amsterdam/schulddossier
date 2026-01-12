<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

class AllegroHelper
{
    /**
     * Creates a SOAP options array with optional proxy settings.
     *
     * @param string|null $proxyHost The proxy host (IP or domain).
     * @param string|null $proxyPort The proxy port.
     * @return array The SOAP options array.
     */
    public static function createSoapOptionsArray(
        ?string $proxyHost = null, 
        ?string $proxyPort = null
    ): array
    {
        $soapOptionsArray = [];
        if (isset($proxyHost, $proxyPort)) {
            $streamContext = stream_context_create([
                'http' => [
                    'proxy' => 'tcp://' . $proxyHost . ':' . $proxyPort,
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
     * @param string|null $proxyHost The proxy host (IP or domain).
     * @param string|null $proxyPort The proxy port.
     * @return array The SOAP client configuration array.
     */
    public static function createSoapClientConfig(
        ?string $proxyHost = null, 
        ?string $proxyPort = null
    ): array
    {
        $config = ['headers' => ['User-Agent' => 'fixxx-schuldhulp/1.0']];

        if (isset($proxyHost, $proxyPort)) {
            $config['proxy'] = 'http://' . $proxyHost . ':' . $proxyPort;
        }

        return $config;
    }
}