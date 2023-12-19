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
