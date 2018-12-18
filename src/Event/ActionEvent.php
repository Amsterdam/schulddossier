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
     * @var string
     */
    private $action;

    /**
     * @var array
     */
    private $data;

    /**
     * @var \DateTime
     */
    private $dateTimeOfEvent;

    const GEBRUIKER_INGELOGD = 'gebruiker_ingelogd';
    const DOSSIER_GEWIJZIGD = 'dossier_gewijzigd';
    const GEBRUIKER_GEWIJZIGD = 'gebruiker_gewijzigd';
    const DOSSIER_AANGEMAAKT = 'dossier_aangemaakt';
    const DOSSIER_GEOPENED = 'dossier_geopened';
    const DOSSIER_VERPLAATST_NAAR_PRULLENBAK = 'dossier_verplaatst_naar_prullenbak';
    const DOSSIER_VERWIJDERD = 'dossier_verwijderd';
    const DOSSIER_HERSTELD = 'dossier_hersteld';

    public function __construct(string $actionName, array $data = [])
    {
        $this->action = $actionName;
        $this->data = $data;
        $this->dateTimeOfEvent = new \DateTime();
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->action;
    }

    /**
     * @return \DateTime
     */
    public function getDateTimeOfEvent(): \DateTime
    {
        return $this->dateTimeOfEvent;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Gebruiker $changedGebruiker
     *
     * @return ActionEvent
     */
    public static function registerGebruikerGewijzigd(Gebruiker $gebruiker, Gebruiker $changedGebruiker): self
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            ["gewijzigd" => self::getGebruikerData($changedGebruiker)]
        );
        return new self(self::GEBRUIKER_GEWIJZIGD, $data);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier   $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierAangemaakt(Gebruiker $gebruiker, Dossier $dossier): self
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier)
        );

        return new self(self::DOSSIER_AANGEMAAKT, $data);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier   $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierGeopened(Gebruiker $gebruiker, Dossier $dossier): self
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier)
        );

        return new self(self::DOSSIER_GEOPENED, $data);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier   $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierVerplaatstNaarPrullenbak(Gebruiker $gebruiker, Dossier $dossier): self
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier)
        );

        return new self(self::DOSSIER_VERPLAATST_NAAR_PRULLENBAK, $data);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier   $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierVerwijderd(Gebruiker $gebruiker, Dossier $dossier): self
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier)
        );

        return new self(self::DOSSIER_VERWIJDERD, $data);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier   $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierHersteld(Gebruiker $gebruiker, Dossier $dossier)
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier)
        );

        return new self(self::DOSSIER_HERSTELD, $data);
    }

    public static function getGebruikerData(Gebruiker $gebruiker): array
    {
        return [
            "gebruiker" => [
                "naam" => sprintf("%s <%s>", $gebruiker->getNaam(), $gebruiker->getEmail())
            ],
        ];
    }

    public static function getDossierData(Dossier $dossier): array
    {
        return [
            "dossier" => [
                "name" => $dossier->getClientNaam(),
                "allegro_nummer" => $dossier->getAllegroNummer(),
                "regas_nummer" => $dossier->getRegasNummer(),
            ],
        ];
    }
}
