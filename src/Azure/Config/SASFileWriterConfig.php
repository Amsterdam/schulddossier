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
                'permissions' => 'w',
                // specificies which resources are available
                // currently signed to the container, but could also be signed to specific blob (b).
                'signedResource' => 'c',
                'apiVersion' => '2023-01-01',
                'expiry' => (new \DateTime('now + 2 minutes'))->format('Y-m-d\TH:i:s\Z'),
                'start' => (new \DateTime('1 minute ago'))->format('Y-m-d\TH:i:s\Z'),
            ]
        );
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}
