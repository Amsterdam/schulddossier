<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Command;

use Doctrine\ORM\EntityManagerInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Service\AllegroService;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestAzureBlobAccess extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var AllegroService
     */
    private $service;

    public function __construct(EntityManagerInterface $em, AllegroService $service)
    {
        $this->em = $em;
        $this->service = $service;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('app:test-azure-storage')
            ->addArgument('action', InputArgument::REQUIRED, 'Test Put or list?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = new Client();

        $authorityHost = getenv('AZURE_AUTHORITY_HOST');
        $tenantId = getenv('AZURE_TENANT_ID');
        $tokenUrl = "$authorityHost$tenantId/oauth2/v2.0/token";
        $grantType = 'client_credentials';
        $scope = 'https://schulddossierdataoo354td.blob.core.windows.net/';
        $clientAssertion = file_get_contents('%env(AZURE_FEDERATED_TOKEN_FILE)%');
        $clientAssertionType = 'urn:ietf:params:oauth:client-assertion-type:jwt-bearer';
        $clientId = getenv('AZURE_CLIENT_ID');

        $output->write(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Trying to connect to ' . $scope . ' for an access token');

        $payload = [
            'grant_type' => $grantType,
            'scope' => $scope,
            'client_assertion' => $clientAssertion,
            'client_assertion_type' => $clientAssertionType,
            'client_id' => $clientId
        ];

        $response = $client->request('POST', $tokenUrl, [RequestOptions::HEADERS => ['Content-Type' => 'application/x-www-form-urlencoded'], RequestOptions::BODY => http_build_query($payload)]);

        if ($response->getStatusCode() >= 400) {
            $output->write(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Error connection: ' . json_encode(['url' => $tokenUrl, 'payload' => $payload, 'response' => $response->getContent(false), 'fullresponse' => $response->toArray(false)]));
            return Command::FAILURE;
        }

        $output->write(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': No error occured connecting to ' . $scope);

        $body = $response->getContent(false);
        $data = json_decode($body, true);

        $accessToken = $data['access_token'];

        $output->write(__CLASS__ . ':' . __FUNCTION__ . ':' . __LINE__ . ': Successfully got access_token ' . $accessToken);
        return Command::SUCCESS;
    }
}
