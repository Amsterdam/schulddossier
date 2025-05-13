<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EnvVarProcessors;

use GemeenteAmsterdam\FixxxSchuldhulp\Azure\AzureDatabase;
use Symfony\Component\DependencyInjection\EnvVarProcessorInterface;

class DatabaseUrlEnvVarProcessor implements EnvVarProcessorInterface
{
    public function __construct(private AzureDatabase $azureDatabase)
    {
    }

    public function getEnv(string $prefix, string $name, \Closure $getEnv): mixed
    {
        $env = $getEnv($name);
        $parsedUrl = parse_url($env);

        $fakePassword = $parsedUrl['pass'] ?? 'insecure';
        $newPassword = $this->azureDatabase->getPassword($fakePassword);

        return str_replace($fakePassword, $newPassword, $env);
    }

    public static function getProvidedTypes(): array
    {
        return [
            'dburl' => 'string',
        ];
    }
}