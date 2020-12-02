<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Subscriber;

use Knp\Component\Pager\Event\BeforeEvent;
use Knp\Component\Pager\Event\Subscriber\Filtration\Doctrine\ORM\QuerySubscriber;
use Knp\Component\Pager\Event\Subscriber\Filtration\PropelQuerySubscriber;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class PostgresPaginateSubscriber implements EventSubscriberInterface
{
    /**
     * Lazy-load state tracker
     * @var bool
     */
    private $isLoaded = false;

    public function before(BeforeEvent $event): void
    {
        // Do not lazy-load more than once
        if ($this->isLoaded) {
            return;
        }

        $disp = $event->getEventDispatcher();
        // hook all standard filtration subscribers

        $listeners = $disp->getListeners('knp_pager.items');
        $querySubscriber = null;

        foreach ($listeners as $listener) {
            if ($listener[0] instanceof QuerySubscriber) {
                $querySubscriber = $listener[0];
            }
        }

        if (null !== $querySubscriber) {
            $disp->removeSubscriber($querySubscriber);
        }
        $disp->addSubscriber(new PostgresQuerySubscriber($event->getRequest()));
        $disp->addSubscriber(new PropelQuerySubscriber($event->getRequest()));

        $this->isLoaded = true;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'knp_pager.before' => ['before', 0],
        ];
    }
}
