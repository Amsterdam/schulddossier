<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure\Config;

class AzureBaseConfig
{
    private array $config;

    public function __construct(
        $subscriptionId,
        $clientId,
        $resourceGroup,
        $authorityHost,
        $tenantId,
        $federatedTokenFile
    ) {
        $this->config = [
            'subscriptionId' => $subscriptionId,
            'clientId' => $clientId,
            'resourceGroup' => $resourceGroup,
            'authorityHost' => $authorityHost,
            'tenantId' => $tenantId,
            'federatedTokenFile' => $federatedTokenFile,
        ];
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}
