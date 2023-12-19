<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure;

use GemeenteAmsterdam\FixxxSchuldhulp\Azure\Config\SASFileReaderConfig;
use GemeenteAmsterdam\FixxxSchuldhulp\Azure\Config\SASFileWriterConfig;
use GuzzleHttp\RequestOptions;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AzureStorage implements AzureStorageInterface
{
    private HttpClientInterface $client;

    private SASFileReaderConfig $SASFileReaderConfig;
    private SASFileWriterConfig $SASFileWriterConfig;

    private array $config;

    private LoggerInterface $logger;

    public function __construct(
        HttpClientInterface $client,
        SASFileReaderConfig $SASFileReaderConfig,
        SASFileWriterConfig $SASFileWriterConfig,
        LoggerInterface     $logger
    )
    {
        $this->client = $client;
        $this->SASFileReaderConfig = $SASFileReaderConfig;
        $this->SASFileWriterConfig = $SASFileWriterConfig;
        $this->logger = $logger;
    }

    // Returns a url that is is signed with a SAS
    public function generateURLForFileReading(string $blob, ?string $destinationPath): string
    {
        // Use a config to keep everything extensible
        $this->config = $this->SASFileReaderConfig->getConfig();

        $signature = $this->generateSASSignature($blob, $destinationPath);

        // Create the signed blob URL
        return $this->getFileUrl($blob, $signature, $destinationPath);
    }

    public function storeFile(UploadedFile $file, ?string $destinationPath = null): string
    {
        $this->config = $this->SASFileWriterConfig->getConfig();

        $signature = $this->generateSASSignature($file->getClientOriginalName(), $destinationPath);

        $uploadUrl = $this->getFileUrl($file->getClientOriginalName(), $signature, $destinationPath);

        $content = $file->getContent();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $uploadUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('x-ms-blob-type: BlockBlob', 'Content-Length: ' . strlen($content)));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);

        return $this->generateURLForFileReading($file->getClientOriginalName(), $destinationPath);
    }

    private function generateSASSignature(string $filename, ?string $destinationPath = null): string
    {
        $accessToken = $this->getAccessToken();

        $signature = $this->getSAS($accessToken, $filename, $destinationPath);

        return $signature;
    }

    private function getFileUrl(string $blob, string $signature, ?string $destinationPath = null): string
    {
        $url = 'https://'
            . $this->config['storageAccount'] . '.blob.core.windows.net/'
            . $this->config['container'] . '/';

        if ($destinationPath) {
            $url .= trim($destinationPath, '/\\') . '/';
        }

        $url .= $blob . '?'
            . $signature;

        return $url;
    }

    private function getCanonicalizedResourcePath(?string $blob, ?string $path = null): string
    {
        $canonicalizedResourcePath = '/blob/' . $this->config['storageAccount'] . '/' . $this->config['container'] . '/';

        if ($path) {
            $canonicalizedResourcePath .= trim($path, '/\\') . '/';
        }

        if ($blob) {
            $canonicalizedResourcePath .= $blob;
        }

        return $canonicalizedResourcePath;
    }

    // Gets a SAS token from the resource manager using an access token
    private function getSAS($accessToken, ?string $blob = null, ?string $path = null): string
    {
        $canonicalizedResource = $this->getCanonicalizedResourcePath($blob, $path);

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
                    'canonicalizedResource' => $canonicalizedResource,
                    'signedResource' => $this->config['signedResource'],
                    'signedPermission' => $this->config['permissions'],
                    'signedProtocol' => 'https',
                    'signedExpiry' => $this->config['expiry'],
                    'signedStart' => $this->config['start'],
                ],
            ]
        );

        $body = $response->getContent(false);
        $data = json_decode($body, true);

        return $data['serviceSasToken'];
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
}
