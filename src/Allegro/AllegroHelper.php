<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;


class AllegroHelper
{
    /**
     * Creates a SOAP options array with optional proxy settings.
     *
     * @param string|null $proxyHostIp The proxy IP address.
     * @param string|null $proxyHostPort The proxy port.
     * @return array The SOAP options array.
     */
    public static function createSoapOptionsArray(
        ?string $proxyHostIp = null,
        ?string $proxyHostPort = null
    ): array {
        $soapOptionsArray = [];

        if (empty($proxyHostIp) || empty($proxyHostPort)) {
            return $soapOptionsArray;
        }

        $streamContext = stream_context_create([
                'http' => [
                    'proxy' => 'tcp://' . $proxyHostIp . ':' . $proxyHostPort,
                    'request_fulluri' => true,
                ],
            ]);

        $soapOptionsArray['stream_context'] = $streamContext;

        return $soapOptionsArray;
    }
}
