<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Event;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Contracts\EventDispatcher\Event;

class DossierChangedEvent extends Event
{
    const NAME = 'app.dossier.changed';

    public function __construct(
        public Dossier $dossier {
            get {
                return $this->dossier;
            }
        },
        public Gebruiker $gebruiker {
            get {
                return $this->gebruiker;
            }
        },
        public ?string $forceType = null {
            get {
                return $this->forceType;
            }
        }
    )
    {
    }
}