<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Event;

use Symfony\Component\Workflow\Event\Event;

class DossierSyncedWithAllegroEvent extends DossierChangedEvent
{
    const NAME = 'app.dossier.synced.allegro';
}
