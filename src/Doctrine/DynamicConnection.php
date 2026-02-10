<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Doctrine;

use GemeenteAmsterdam\FixxxSchuldhulp\Azure\AzureDatabase;
use Doctrine\Common\EventManager;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver;
use Psr\Log\LoggerInterface;

class DynamicConnection extends Connection
{
    public function __construct(
        array $params,
        Driver $driver,
        ?Configuration $config = null,
        ?EventManager $eventManager = null,
        private readonly ?AzureDatabase $azureDatabase = null,
        private readonly ?LoggerInterface $logger = null,
    ) {
        if ($azureDatabase && $this->logger && isset($params['password'])) {
            $newPassword = $azureDatabase->getPassword($params['password']);
            $params = $this->addNewPasswordToParams($params, $newPassword);
        }

        parent::__construct($params, $driver, $config, $eventManager);

        if ($azureDatabase && $this->logger && isset($params['password'])) {
            try {
                $this->connect();
            } catch (\Exception $e) {
                $this->logger->debug("DB Connection failed. Trying to invalidate cache and set password again.");
                $newPassword = $azureDatabase->getPassword($params['password'], true);
                $params = $this->addNewPasswordToParams($params, $newPassword);
                parent::__construct($params, $driver, $config, $eventManager);
                $this->connect();
            }
        }
    }

    private function addNewPasswordToParams(array $params, string $newPassword): array
    {
        $params['password'] = $newPassword;

        if (array_key_exists('url', $params)) {
            $params['url'] = str_replace('temporary', $newPassword, $params['url']);
        }

        return $params;
    }
}
