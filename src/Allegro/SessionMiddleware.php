<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;
use GuzzleHttp\Promise\PromiseInterface;
use Http\Promise\Promise;
use Phpro\SoapClient\Middleware\Middleware;
use Phpro\SoapClient\Xml\SoapXml;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class SessionMiddleware extends Middleware
{
    /**
     * @var string
     */
    private $sessionId;

    public function __construct(Schuldhulpbureau $bureau)
    {
        $this->sessionId = $bureau->getAllegroSessionId();
    }

    public function getName(): string
    {
        return 'allegro_session_middleware';
    }

    /**
     * @param callable $handler
     * @param RequestInterface $request
     * @param array $options
     *
     * @return PromiseInterface
     */
    public function beforeRequest(callable $handler, RequestInterface $request): Promise
    {
        $xml = SoapXml::fromStream($request->getBody());
        $doc = $xml->getXmlDocument();

        $sessionHeader = $xml->createSoapHeader();

        $rOClientIDHeader = $doc->createElement("ROClientIDHeader");
        $rOClientIDHeader->setAttributeNS(
            'http://www.w3.org/2000/xmlns/', // xmlns namespace URI
            'xmlns:ns1',
            'http://tempuri.org/'
        );
        $rOClientIDHeader = $sessionHeader->appendChild($rOClientIDHeader);

        $id = $doc->createElement("ID", $this->sessionId);
        $id->setAttributeNS(
            'http://www.w3.org/2000/xmlns/', // xmlns namespace URI
            'xmlns:ns1',
            'http://tempuri.org/'
        );
        $rOClientIDHeader->appendChild($id);

        $xml->prependSoapHeader($sessionHeader);

        $request = $request->withBody($xml->toStream());

        $options = [];

        return $handler($request, $options);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return ResponseInterface
     */
    public function afterResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}