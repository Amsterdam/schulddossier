<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Event;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\EventDispatcher\Event;

class ActionEvent extends Event
{
    const NAME = 'app.action.register';

    /**
     * @var Gebruiker
     */
    private $gebruiker;

    /**
     * @var Gebruiker
     */
    private $gewijzigdeGebruiker;

    /**
     * @var Dossier
     */
    private $dossier;

    /**
     * @var \DateTime
     */
    private $dateTimeOfEvent;

    const GEBRUIKER_INGELOGD = 'gebruiker_ingelogd';
    const DOSSIER_GEWIJZIGD = 'dossier_gewijzigd';
    const GEBRUIKER_GEWIJZIGD = 'gebruiker_gewijzigd';
    const DOSSIER_GEOPENED = 'dossier_geopened';

    /**
     * @var string
     */
    private $action;

    public function __construct(string $actionName, Gebruiker $gebruiker, Gebruiker $gewijzigdeGebruiker = null, Dossier $dossier = null)
    {
        $this->gebruiker = $gebruiker;
        $this->gewijzigdeGebruiker = $gewijzigdeGebruiker;
        $this->dossier = $dossier;
        $this->dateTimeOfEvent = new \DateTime();
        $this->action = $actionName;
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->action;
    }

    /**
     * @return Gebruiker
     */
    public function getGebruiker(): Gebruiker
    {
        return $this->gebruiker;
    }

    /**
     * @return Gebruiker
     */
    public function getGewijzigdeGebruiker(): ?Gebruiker
    {
        return $this->gewijzigdeGebruiker;
    }

    /**
     * @return Dossier
     */
    public function getDossier(): ?Dossier
    {
        return $this->dossier;
    }

    /**
     * @return \DateTime
     */
    public function getDateTimeOfEvent(): \DateTime
    {
        return $this->dateTimeOfEvent;
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Gebruiker $changedGebruiker
     *
     * @return ActionEvent
     */
    public static function registerGebruikerGewijzigd(Gebruiker $gebruiker, Gebruiker $changedGebruiker): self
    {
        return new self(self::GEBRUIKER_GEWIJZIGD, $gebruiker, $changedGebruiker);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier   $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierGeopened(Gebruiker $gebruiker, Dossier $dossier): self
    {
        return new self(self::DOSSIER_GEOPENED, $gebruiker, null, $dossier);
    }
}
