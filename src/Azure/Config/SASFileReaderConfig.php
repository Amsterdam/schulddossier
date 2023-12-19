<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure\Config;

class SASFileReaderConfig
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
                'permissions' => 'r',
                // specificies which resources are available
                // currently signed to the container, but could also be signed to specific blob (b).
                'signedResource' => 'b',
                'apiVersion' => '2023-01-01',
                // TODO: Check timezones, Azure was running at -1 hour compared to local
                'expiry' => (new \DateTime('now + 120 minutes'))->format('Y-m-d\TH:i:s\Z'),
                'start' => (new \DateTime('120 minutes ago'))->format('Y-m-d\TH:i:s\Z'),
            ]
        );
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}
