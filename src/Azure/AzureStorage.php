<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure;

use AzureOSS\Storage\Blob\BlobRestProxy;
use GemeenteAmsterdam\FixxxSchuldhulp\Azure\Config\SASFileReaderConfig;
use GuzzleHttp\RequestOptions;
use Psr\Log\LoggerInterface;
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
    public function generateURLForFileReading(string $blob): string
    {
        // Use a config to keep everything extensible
        $this->config = $this->SASFileReaderConfig->getConfig();

        var_dump($this->config);

        $accessToken = $this->getAccessToken();

        $sasToken = $this->getSAS($accessToken);
        var_dump($sasToken);
        $blobClient = $this->createBlobClient();

        return $blobClient->listContainers();

//        $signature = $this->getSAS($accessToken);
//
//        $endpoint = 'https://' . $this->config['storageAccount'] . '.blob.core.windows.net';
//        $container = $this->config['container'];
//        $blob = 'envelop.svg';
//        $url = $endpoint . '/' . $container . '/' . $blob . '?' . $signature;
//
//        $uploadfile = "public/images/envelop.svg";
//        $content = file_get_contents($uploadfile);
//
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array('x-ms-blob-type: BlockBlob', 'Content-Length: ' . strlen($content)));
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        $response = curl_exec($ch);
//        curl_close($ch);
//
//        $url = 'https://'
//            . $this->config['storageAccount'] . '.blob.core.windows.net/'
//            . $this->config['container'] . '/'
//            . $blob . '?'
//            . $signature;
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
        var_dump($data);

        $accessToken = $data['access_token'];

        return $accessToken;
    }

    // Gets a SAS token from the resource manager using an access token
    private function getSAS($accessToken)
    {
        $url = 'https://management.azure.com/subscriptions/'
            . $this->config['subscriptionId'] . '/resourceGroups/' . $this->config['resourceGroup']
            . '/providers/Microsoft.Storage/storageAccounts/' . $this->config['storageAccount']
            . '/listServiceSas?api-version=' . $this->config['apiVersion'];

        $response = $this->client->request(
            'POST',
            $url,
            [
                RequestOptions::HEADERS => [
                    'Authorization' => 'Bearer ' . $accessToken,
                    'Content-Type' => 'application/json',
                ],
                RequestOptions::JSON => [
                    'canonicalizedResource' => '/blob/' . $this->config['storageAccount'] . '/' . $this->config['container'],
                    //'signedResource' => $this->config['signedResource'],
                    'signedPermission' => $this->config['permissions'],
                    //'signedProtocol' => 'https',
                    'signedExpiry' => $this->config['expiry'],
                    //'signedStart' => $this->config['start'],
                ],
            ]
        );

        $body = $response->getContent(false);
        $data = json_decode($body, true);
        var_dump($data);


        return $data['serviceSasToken'];
    }

    private function createBlobClient($sasToken)
    {
        $client = BlobRestProxy::createBlobService(
            'BlobEndpoint=https://' .
            $this->config['storageAccount'] .
            '.blob.core.windows.net/data;SharedAccessSignature='.
            $sasToken .
            ';'
        );

        return $client;
    }


}
