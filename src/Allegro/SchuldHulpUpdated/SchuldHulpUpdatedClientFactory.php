<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated;

use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\SchuldHulpUpdatedClient;
use GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\SchuldHulpUpdatedClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class SchuldHulpUpdatedClientFactory
{
    public static function factory(string $wsdl): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\SchuldHulpUpdatedClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(SchuldHulpUpdatedClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new SchuldHulpUpdatedClient($caller);
    }
}

