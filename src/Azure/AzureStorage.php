<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure;

use AzureOSS\Storage\Blob\BlobRestProxy;
use GemeenteAmsterdam\FixxxSchuldhulp\Azure\Config\SASFileReaderConfig;
use GuzzleHttp\RequestOptions;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AzureStorage implements AzureStorageInterface
{

    public const CACHE_KEY = 'azure-blob-password';

    public function __construct(
        private readonly HttpClientInterface $client,
        private readonly SASFileReaderConfig $SASFileReaderConfig,
        private readonly LoggerInterface     $logger,
        private ?array                       $config = null,
    )
    {
    }

// Returns a url that is is signed with a SAS
    public
    function generateURLForFileReading(string $blob): string
    {
        // Use a config to keep everything extensible
        $this->config = $this->SASFileReaderConfig->getConfig();

        $accessToken = $this->getAccessToken();

        $blobClient = $this->createBlobClient($accessToken);
        
        return $blobClient->listContainers();

//        $signature = $this->getSAS($accessToken);
//
//        // Create the signed blob URL
//        $url = 'https://'
//            .$this->config['storageAccount'].'.blob.core.windows.net/'
//            .$this->config['imageContainer'].'/'
//            .$blob.'?'
//            .$signature;
//
//        return $url;
    }

// Authenticate with federated token to get access token,
// which is used to get a SAS from the resource manager
    private function getAccessToken(): string
    {
        // TODO implement caching
        $tokenUrl = $this->config['authorityHost'] . $this->config['tenantId'] . '/oauth2/v2.0/token';
        $grantType = 'client_credentials';
        $scope = 'https://management.azure.com//.default'; // double slash is on purpose
        $clientAssertion = file_get_contents($this->config['federatedTokenFile']);
        $clientAssertionType = 'urn:ietf:params:oauth:client-assertion-type:jwt-bearer';

        // Prepare the request payload
        $payload = [
            'grant_type' => $grantType,
            'scope' => $scope,
            'client_assertion' => $clientAssertion,
            'client_assertion_type' => $clientAssertionType,
            'client_id' => $this->config['clientId'],
        ];

        $response = $this->client->request(
            'POST',
            $tokenUrl,
            [
                RequestOptions::HEADERS => ['Content-Type' => 'application/x-www-form-urlencoded'],
                RequestOptions::BODY => http_build_query($payload),
            ]
        );

        if ($response->getStatusCode() >= 400) {
            throw new \Exception(json_encode(['url' => $tokenUrl, 'response' => $response->getContent(false)]));
        }

        $body = $response->getContent(false);
        $data = json_decode($body, true);

        $accessToken = $data['access_token'];

        return $accessToken;
    }


    private function createBlobClient(string $accessToken) {
        $connectionString = 'DefaultEndpointsProtocol=https;AccountName='.
        $this->config['fileStorageAccount'] .
        ';AccountKey=' .
        $accessToken;

        return BlobRestProxy::createBlobService($connectionString);
    }

    private function listContainers(BlobRestProxy $blobRestProxy) {
        return $blobRestProxy->listContainers();
    }



}
