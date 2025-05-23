<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Event;

use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Contracts\EventDispatcher\Event;

class ActionEvent extends Event
{
    const NAME = 'app.action.register';

    /**
     * @var \DateTime
     */
    private $dateTimeOfEvent;

    const GEBRUIKER_INGELOGD = 'gebruiker_ingelogd';
    const DOSSIER_GEWIJZIGD = 'dossier_gewijzigd';
    const DOSSIER_STATUS_GEWIJZIGD = 'dossier_status_gewijzigd';
    const GEBRUIKER_GEWIJZIGD = 'gebruiker_gewijzigd';
    const GEBRUIKER_VERWIJDERD = 'gebruiker_verwijderd';
    const GEBRUIKER_DISABLED_SYSTEM = 'gebruiker_disabled_door_systeem';
    const GEBRUIKER_DELETED_SYSTEM = 'gebruiker_verwijderd_door_systeem';
    const DOSSIER_AANGEMAAKT = 'dossier_aangemaakt';
    const DOSSIER_GEOPENED = 'dossier_geopened';
    const DOSSIER_VERPLAATST_NAAR_PRULLENBAK = 'dossier_verplaatst_naar_prullenbak';
    const DOSSIER_VERWIJDERD = 'dossier_verwijderd';
    const DOSSIER_HERSTELD = 'dossier_hersteld';
    const DOSSIER_SEND_TO_ALLEGRO = 'dossier_send_to_allegro';

//    public function __construct(string $actionName, array $data = [])
    public function __construct(
        private string $action,
        private array $data = [],
        private ?Dossier $dossier = null
    )
    {
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
     * @param $data
     * @return array
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this->data;
    }

    /**
     * @return Dossier
     */
    public function getDossier(): ?Dossier
    {
        return $this->dossier;
    }

    /**
     * @param Gebruiker|UserInterface $gebruiker
     * @param Gebruiker $changedGebruiker
     *
     * @return ActionEvent
     */
    public static function registerGebruikerGewijzigd(
        Gebruiker|UserInterface $gebruiker,
        Gebruiker $changedGebruiker
    ): self {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            ["gewijzigd" => self::getGebruikerData($changedGebruiker)]
        );
        return new self(self::GEBRUIKER_GEWIJZIGD, $data);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierAangemaakt(Gebruiker $gebruiker, Dossier $dossier): self
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier)
        );

        return new self(self::DOSSIER_AANGEMAAKT, $data, $dossier);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierGeopened(Gebruiker $gebruiker, Dossier $dossier): self
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier)
        );

        return new self(self::DOSSIER_GEOPENED, $data, $dossier);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierVerplaatstNaarPrullenbak(Gebruiker $gebruiker, Dossier $dossier): self
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier)
        );

        return new self(self::DOSSIER_VERPLAATST_NAAR_PRULLENBAK, $data, $dossier);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier $dossier
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
     * @param Dossier $dossier
     *
     * @return ActionEvent
     */
    public static function registerDossierHersteld(Gebruiker $gebruiker, Dossier $dossier)
    {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier)
        );

        return new self(self::DOSSIER_HERSTELD, $data, $dossier);
    }

    /**
     * @param Gebruiker $gebruiker
     * @param Dossier $dossier
     * @param string $fromTransition
     * @param string $toTransition
     *
     * @return ActionEvent
     */
    public static function registerDossierStatusGewijzigd(
        Gebruiker $gebruiker,
        Dossier $dossier,
        string $fromTransition,
        string $toTransition
    ) {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            self::getDossierData($dossier),
            self::getTransitionData($fromTransition, $toTransition)
        );

        return new self(self::DOSSIER_STATUS_GEWIJZIGD, $data, $dossier);
    }

    /**
     * @param Gebruiker|UserInterface $gebruiker
     * @param Gebruiker $verwijderdeGebruiker
     * @return self
     */
    public static function registerGebruikerVerwijderd(
        Gebruiker|UserInterface $gebruiker,
        Gebruiker $verwijderdeGebruiker
    ): self {
        $data = array_merge(
            self::getGebruikerData($gebruiker),
            ["verwijderd" => self::getGebruikerData($verwijderdeGebruiker)]
        );
        return new self(self::GEBRUIKER_VERWIJDERD, $data);
    }

    /**
     * @param string $actionName
     * @param string $classFile
     * @param int $gebruikersCount
     * @param int $actionEventsCount
     * @return self
     */
    public static function registerGebruikerAutomatischAangepast(
        string $actionName,
        string $classFile,
        int $gebruikersCount,
        int $actionEventsCount
    ): self {
        $data = array_merge(
            ['Class' => $classFile],
            [
                "aangepast" => [
                    'gebruikers' => $gebruikersCount,
                    'actionevents' => $actionEventsCount
                ]
            ]
        );

        return new self($actionName, $data);
    }


    public static function getTransitionData(string $fromTransition, string $toTransition): array
    {
        return [
            "status" => [
                "van" => $fromTransition,
                "naar" => $toTransition,
            ],
        ];
    }

    public static function getGebruikerData(Gebruiker $gebruiker): array
    {
        return [
            "gebruiker" => [
                "naam" => $gebruiker->getNaam(),
                "email" => $gebruiker->getEmail(),
                "username" => $gebruiker->getUserName(),
                "type" => $gebruiker->getType(),
            ],
        ];
    }

    public static function getDossierData(Dossier $dossier): array
    {
        return [
            "dossier" => [
                "allegro_nummer" => $dossier->getAllegroNummer(),
                "regas_nummer" => $dossier->getRegasNummer(),
            ],
        ];
    }
}
