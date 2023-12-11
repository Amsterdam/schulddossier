<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Doctrine;

use GemeenteAmsterdam\FixxxSchuldhulp\Azure\AzureDatabase;
use Doctrine\Bundle\DoctrineBundle\ConnectionFactory as BaseConnectionFactory;
use Doctrine\Common\EventManager;
use Doctrine\DBAL\Configuration;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DynamicConnectionFactory extends BaseConnectionFactory
{
    public function __construct(
        private readonly ContainerInterface $container,
        private readonly AzureDatabase      $azureDatabase,
        private readonly LoggerInterface    $logger
    )
    {
        parent::__construct($container->getParameter('doctrine.dbal.connection_factory.types'));
    }

    /**
     * @param array $params
     * @param Configuration|null $config
     * @param EventManager|null $eventManager
     * @param array $mappingTypes
     * @return DynamicConnection
     * @throws \Doctrine\DBAL\Exception
     */
    public function createConnection(
        array          $params,
        ?Configuration $config = null,
        ?EventManager  $eventManager = null,
        array          $mappingTypes = []
    ): DynamicConnection
    {
        $defaultConnection = parent::createConnection($params, $config, $eventManager, $mappingTypes);

        $driver = $defaultConnection->getDriver();

        return new DynamicConnection(
            $defaultConnection->getParams(),
            $driver,
            $defaultConnection->getConfiguration(),
            $defaultConnection->getEventManager(),
            $this->azureDatabase,
            $this->logger
        );
    }
}