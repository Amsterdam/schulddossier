<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Doctrine;

use GemeenteAmsterdam\FixxxSchuldhulp\Azure\AzureDatabase;
use Doctrine\Common\EventManager;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver;

class DynamicConnection extends Connection
{
    public function __construct(
        array          $params,
        Driver         $driver,
        ?Configuration $config = null,
        ?EventManager  $eventManager = null,
        ?AzureDatabase $azureDatabase = null,
    )
    {
        if ($azureDatabase) {
            $params['password'] = $azureDatabase->getPassword($params['password']);
        }

        parent::__construct($params, $driver, $config, $eventManager);
    }
}