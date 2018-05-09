<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class TestSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::TERMINATE => ['onKernelTerminate'],
        ];
    }

    public function onKernelTerminate()
    {
        //$a = null; $a->test();
    }
}