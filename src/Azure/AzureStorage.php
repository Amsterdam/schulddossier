<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure;

use GemeenteAmsterdam\FixxxSchuldhulp\Azure\Config\SASFileReaderConfig;
use GemeenteAmsterdam\FixxxSchuldhulp\Azure\Config\SASFileWriterConfig;
use GuzzleHttp\RequestOptions;
use Matrix\Exception;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class AzureStorage implements AzureStorageInterface
{
    public const CACHE_KEY = 'azure-access-token';
    private array $config;
    private string $accessToken;

    public function __construct(
        private readonly HttpClientInterface $client,
        private readonly SASFileReaderConfig $SASFileReaderConfig,
        private readonly SASFileWriterConfig $SASFileWriterConfig,
        private readonly LoggerInterface     $logger
    )
    {
        $this->config = $this->SASFileReaderConfig->getConfig();
        $this->getAccessToken();
    }

    /**
     * Returns a url that is is signed with a SAS for reading
     *
     *
     * @param string $filename
     * Filename of file you are reading
     *
     * @param string|null $destinationPath
     * Optional: path where the blob is stored
     *
     * @return string
     * returns an URL with SAS signature
     *
     * @throws \Psr\Cache\InvalidArgumentException
     * Can be thrown deep inside the Cache interface, see Symfony\Component\Cache\Traits\ConstraintsTrait:63     *
     */
    public function generateURLForFileReading(string $filename, ?string $destinationPath): string
    {
        // Use a config to keep everything extensible
        $this->logger->debug('generateURLForFileReading: $file = ' . $filename);
        $this->logger->debug('generateURLForFileReading: $destinationPath = ' . $destinationPath);
        $this->logger->debug('Using SASFileReaderConfig config');
        $this->config = $this->SASFileReaderConfig->getConfig();

        $signature = $this->generateSASSignature($filename, $destinationPath);
        $this->logger->debug('Using signature');
        $this->logger->debug($signature);

        // Create the signed blob URL
        return $this->getFileUrl($filename, $signature, $destinationPath);
    }

    /**
     *
     * Store a file in the storage container and return the SAS signed URL for ir
     *
     *
     * @param UploadedFile $file
     * The file that should be stored
     *
     * @param string|null $destinationPath
     * Optional: the path where the file should be stored
     *
     * @return string
     * returns a SAS signed url of the file
     *
     * @throws \Psr\Cache\InvalidArgumentException
     * Can be thrown deep inside the Cache interface, see Symfony\Component\Cache\Traits\ConstraintsTrait:63
     */
    public function storeFile(UploadedFile $file, ?string $destinationPath = null): string
    {
        $this->config = $this->SASFileWriterConfig->getConfig();

        $signature = $this->generateSASSignature($file->getClientOriginalName(), $destinationPath);

        $uploadUrl = $this->getFileUrl($file->getClientOriginalName(), $signature, $destinationPath);

        $content = $file->getContent();

        $response = $this->client->request(
            'PUT',
            $uploadUrl,
            [
                RequestOptions::BODY => $content,
                RequestOptions::HEADERS => [
                    'x-ms-blob-type' => 'BlockBlob',
                    # Do not override the Content-Type header here, Guzzle takes care of it
                ] ,
            ]
        );

        return $this->generateURLForFileReading($file->getClientOriginalName(), $destinationPath);
    }

    /**
     * Sets the access token
     *
     * @param bool|null $invalidateCache
     * Optional: Boolean to tell the system to invalidate the cache
     *
     * @return void
     *
     *
     * @throws \Psr\Cache\InvalidArgumentException
     * Can be thrown deep inside the Cache interface, see Symfony\Component\Cache\Traits\ConstraintsTrait:63
     */
    private function getAccessToken(?bool $invalidateCache = false): void
    {
        $cache = new FilesystemAdapter();
        if ($invalidateCache) {
            $cache->delete(self::CACHE_KEY);
        }

        $this->accessToken = $cache->get(self::CACHE_KEY, function (ItemInterface $item) {
            $this->logger->debug("Cache invalid. Getting new access token from azure");
            return $this->getAccessTokenFromAzure();
        });
    }

    /**
     * Get a new access token from Azure using the federated credentials
     *
     * @return string
     * The new access token
     *
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    private function getAccessTokenFromAzure(): string
    {
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

        return $data['access_token'];
    }

    /**
     * Generate a SAS signature for a given file
     *
     *
     * @param string|null $filename
     * The filename of the blob
     *
     * @param string|null $destinationPath
     * Optional: the path where the file is be stored
     *
     * @return string
     * The SAS signature for the file with the active config
     *
     *
     * @throws \Psr\Cache\InvalidArgumentException
     * Can be thrown deep inside the Cache interface, see Symfony\Component\Cache\Traits\ConstraintsTrait:63
     */
    private function generateSASSignature(?string $filename = null, ?string $destinationPath = null): string
    {
        $canonicalizedResource = $this->getCanonicalizedResourcePath($filename, $destinationPath);

        $url = 'https://management.azure.com/subscriptions/'
            . $this->config['subscriptionId'] . '/resourceGroups/' . $this->config['resourceGroup']
            . '/providers/Microsoft.Storage/storageAccounts/' . $this->config['storageAccount']
            . '/listServiceSas?api-version=' . $this->config['apiVersion'];

        try {
            $response = $this->makeSasRequest($url, $canonicalizedResource);

            if ($response->getStatusCode() >= 400) {
                throw new \Exception();
            }
        } catch (\Exception $e) {
            $this->logger->debug('Getting SAS failed, trying again with new Access token');
            $this->getAccessToken(true);
            $response = $this->makeSasRequest($url, $canonicalizedResource);
        }

        $body = $response->getContent(false);
        $data = json_decode($body, true);

        if (!array_key_exists('serviceSasToken', $data)){
            throw new \Exception('Failed generating SAS signature');
        }

        return $data['serviceSasToken'];
    }

    /**
     * Make the POST request to Azure for getting a SAS token
     *
     *
     * @param string $url
     * @param string $canonicalizedResource
     *
     * @return ResponseInterface
     *
     * @throws \Psr\Cache\InvalidArgumentException
     * Can be thrown deep inside the Cache interface, see Symfony\Component\Cache\Traits\ConstraintsTrait:63
     *
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    private function makeSasRequest(string $url, string $canonicalizedResource): ResponseInterface
    {
        return $this->client->request(
            'POST',
            $url,
            [
                RequestOptions::HEADERS => [
                    'Authorization' => 'Bearer ' . $this->accessToken,
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
    }

    /**
     * Get the URL for accessing a file
     *
     * @param string $filename
     * The file name
     *
     * @param string $signature
     * The signature for accessing this file
     *
     * @param string|null $destinationPath
     * Optional: the path where the file is be stored
     *
     *
     * @return string
     * The URL to access the file using the SAS signature
     */
    private function getFileUrl(string $filename, string $signature, ?string $destinationPath = null): string
    {
        $url = 'https://'
            . $this->config['storageAccount'] . '.blob.core.windows.net/'
            . $this->config['container'] . '/';

        if ($destinationPath) {
            $url .= trim($destinationPath, '/\\') . '/';
        }

        $url .= $filename . '?'
            . $signature;

        return $url;
    }

    /**
     * Generate the canonicalized resource path needed to generate the SAS signature
     *
     * @param string|null $filename
     * Optional: The file name
     * Caution: Make sure that if you do not pass any filename, your scope is a container
     *
     * @param string|null $destinationPath
     * Optional: the path where the file is be stored
     *
     * @return string
     * The canonicalized resource path
     */
    private function getCanonicalizedResourcePath(?string $filename, ?string $destinationPath = null): string
    {
        $canonicalizedResourcePath = '/blob/' . $this->config['storageAccount'] . '/' . $this->config['container'] . '/';

        if ($destinationPath) {
            $canonicalizedResourcePath .= trim($destinationPath, '/\\') . '/';
        }

        if ($filename) {
            $canonicalizedResourcePath .= $filename;
        }

        return $canonicalizedResourcePath;
    }
}
