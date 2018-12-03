<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Event;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\EventDispatcher\Event;

class DossierChangedEvent extends Event
{
    const NAME = 'app.dossier.changed';

    /**
     * @var Dossier
     */
    private $dossier;

    /**
     * @var Gebruiker
     */
    private $gebruiker;

    /**
     * @param Dossier $dossier
     * @param Gebruiker $gebruiker
     */
    public function __construct(Dossier $dossier, Gebruiker $gebruiker)
    {
        $this->dossier = $dossier;
        $this->gebruiker = $gebruiker;
    }

    public function getDossier()
    {
        return $this->dossier;
    }

    public function getGebruiker()
    {
        return $this->gebruiker;
    }
}