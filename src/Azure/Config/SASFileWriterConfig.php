<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure\Config;

class SASFileWriterConfig
{
    private array $config;

    public function __construct(
        AzureBaseConfig $baseConfig,
                        $fileStorageAccount,
                        $fileContainer
    )
    {
        $this->config = array_merge(
            $baseConfig->getConfig(),
            [
                'storageAccount' => $fileStorageAccount,
                'container' => $fileContainer,
                'permissions' => 'cw',
                // specificies which resources are available
                // The current write config only gives access to the file to be written
                'signedResource' => 'b',
                'apiVersion' => '2023-01-01',
                // TODO: Check timezones, Azure was running at -1 hour compared to local
                'expiry' => (new \DateTime('now + 5 minutes'))
                    ->setTimezone(new \DateTimeZone('UTC'))
                    ->format('Y-m-d\TH:i:s\Z'),
                'start' => (new \DateTime('5 minutes ago'))
                    ->setTimezone(new \DateTimeZone('UTC'))
                    ->format('Y-m-d\TH:i:s\Z'),
            ]
        );
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}
