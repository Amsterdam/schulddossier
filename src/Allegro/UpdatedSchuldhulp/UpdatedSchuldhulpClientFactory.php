<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\UpdatedSchuldhulpClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\UpdatedSchuldhulpClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class UpdatedSchuldhulpClientFactory
{
    public static function factory(string $wsdl): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\UpdatedSchuldhulpClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(UpdatedSchuldhulpClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new UpdatedSchuldhulpClient($engine, $eventDispatcher);
    }
}

