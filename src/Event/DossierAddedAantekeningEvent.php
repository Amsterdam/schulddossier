<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Event;

class DossierAddedAantekeningEvent extends DossierChangedEvent
{
    const NAME = 'app.dossier.aantekening.added';
}
