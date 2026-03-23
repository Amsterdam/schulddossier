<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Event;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Contracts\EventDispatcher\Event;

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
     * @var string|null
     */
    private $forceType;

    /**
     * @var string|null
     */
    private $remark;

    /**
     * @param Dossier $dossier
     * @param Gebruiker $gebruiker
     */
    public function __construct(Dossier $dossier, Gebruiker $gebruiker, string $forceType = null, string $remark = null)
    {
        $this->dossier = $dossier;
        $this->gebruiker = $gebruiker;
        $this->forceType = $forceType;
        $this->remark = $remark;
    }

    public function getDossier()
    {
        return $this->dossier;
    }

    public function getGebruiker()
    {
        return $this->gebruiker;
    }

    public function getForceType(): ?string
    {
        return $this->forceType;
    }
    public function getRemark(): ?string
    {
        return $this->remark;
    }
}
