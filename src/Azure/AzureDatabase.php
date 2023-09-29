<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Azure;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AzureDatabase
{
    public function __construct(private HttpClientInterface $client, private string $azureAuthorityHost, private string $azureTenantId, private string $azureFederatedTokenFile, private string $azureClientId)
    {

    }

    public function getPassword(string $default): string
    {
        var_dump($this->azureAuthorityHost, $this->azureTenantId, $this->azureFederatedTokenFile, $this->azureClientId);die();
        if (!$this->azureAuthorityHost || !$this->azureTenantId || !$this->azureFederatedTokenFile || !$this->azureClientId) return $default;

        return $this->getPasswordFromAzure();
    }

    private function getPasswordFromAzure(): string
    {
        $authorityHost = $this->azureAuthorityHost;
        $tenantId = $this->azureTenantId;
        $tokenUrl = "$authorityHost$tenantId/oauth2/v2.0/token";
        $grantType = 'client_credentials';
        $scope = 'https://ossrdbms-aad.database.windows.net/.default';
        $clientAssertion = file_get_contents($this->azureFederatedTokenFile);
        $clientAssertionType = 'urn:ietf:params:oauth:client-assertion-type:jwt-bearer';
        $clientId = $this->azureClientId;

        $payload = [
            'grant_type' => $grantType,
            'scope' => $scope,
            'client_assertion' => $clientAssertion,
            'client_assertion_type' => $clientAssertionType,
            'client_id' => $clientId
        ];


//        try {
            $response = $this->client->request('POST', $tokenUrl, [RequestOptions::HEADERS => ['Content-Type' => 'application/x-www-form-urlencoded'], RequestOptions::BODY => http_build_query($payload)]);

            if ($response->getStatusCode() >= 400) {
                throw new \Exception(json_encode(['url' => $tokenUrl, 'payload' => $payload, 'response' => $response->getContent(false), 'fullresponse' => $response->toArray(false)]));
            }

            $body = $response->getContent(false);
            $data = json_decode($body, true);

            $accessToken = $data['access_token'];

            return $accessToken;

//        } catch (RequestException $e) {
//            // Handle the request exception
//            if ($e->hasResponse()) {
//                $response = $e->getResponse();
//                $body = $response->getBody();
//                $statusCode = $response->getStatusCode();
//
//                echo "ERROR: $body";
//                // Handle the error response...
//            }
//        }

        return '';
    }
}