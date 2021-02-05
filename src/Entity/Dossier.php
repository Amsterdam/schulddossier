<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use GemeenteAmsterdam\FixxxSchuldhulp\Traits\ExportAble;
use GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints\BSN;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="GemeenteAmsterdam\FixxxSchuldhulp\Repository\DossierRepository")
 * @ORM\Table
 * @UniqueEntity("allegroNummer")
 */
class Dossier
{
    use ExportAble;

    public const STATUS_BEZIG_MADI = 'bezig_madi';
    public const STATUS_COMPLEET_MADI = 'compleet_madi';
    public const STATUS_GECONTROLEERD_MADI = 'gecontroleerd_madi';
    public const STATUS_VERZONDEN_MADI = 'verzonden_madi';
    public const STATUS_COMPLEET_GKA = 'compleet_gka';
    public const STATUS_DOSSIER_GECONTROLEERD_GKA = 'dossier_gecontroleerd_gka';
    public const STATUS_AFGESLOTEN_GKA = 'afgesloten_gka';

    public const ALLEGRO_A = 'Inventariseren ingediende aanvraag';
    public const ALLEGRO_B = 'Saldi worden opgevraagd';
    public const ALLEGRO_C = 'Saldi worden opgevraagd';
    public const ALLEGRO_D = 'Saldi worden opgevraagd';
    public const ALLEGRO_E = 'Afkoopvoorstellen zijn verstuurd';
    public const ALLEGRO_F = 'Afkoopvoorstellen zijn verstuurd';
    public const ALLEGRO_G = 'Afkoopvoorstellen zijn verstuurd';
    public const ALLEGRO_I = 'Schuldeisers akkoord';
    public const ALLEGRO_Z = 'Aanvraag afgewezen ';

    public const ALLEGRO_STATUS = [
        'A' => self::ALLEGRO_A,
        'B' => self::ALLEGRO_B,
        'C' => self::ALLEGRO_C,
        'D' => self::ALLEGRO_D,
        'E' => self::ALLEGRO_E,
        'F' => self::ALLEGRO_F,
        'G' => self::ALLEGRO_G,
        'I' => self::ALLEGRO_I,
        'Z' => self::ALLEGRO_Z,
    ];

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=false)
     */
    private $dossierTemplate;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=false)
     */
    private $status;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=255)
     */
    private $clientNaam;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $clientVoorletters;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     * @Assert\Choice(callback="getGeslachtOpties")
     */
    private $clientGeslacht;

    /**
     * @var \Date
     * @ORM\Column(type="date", nullable=true)
     */
    private $clientGeboortedatum;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="date", nullable=true)
     */
    private $clientHuwelijksdatum;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     * @BSN()
     */
    private $clientBSN;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $clientBanknaam;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $clientTelefoonnummer;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $clientStraat;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Assert\Length(min=0, max=50)
     */
    private $clientHuisnummer;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Assert\Length(min=0, max=50)
     */
    private $clientPostcode;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $clientWoonplaats;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     * @Assert\Choice(callback="getBurgelijkeStaatOpties")
     */
    private $clientBurgelijkeStaat;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $clientBurgelijkeStaatSinds;

    /**
     * @var array
     * @ORM\Column(type="json", nullable=true)
     */
    private $clientKinderen;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $partnerNvt;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $partnerNaam;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $partnerVoorletters;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     * @Assert\Choice(callback="getGeslachtOpties")
     */
    private $partnerGeslacht;

    /**
     * @var \Date
     * @ORM\Column(type="date", nullable=true)
     */
    private $partnerGeboortedatum;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     * @BSN()
     */
    private $partnerBSN;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $partnerBanknaam;

    /**
     * @var Schuldhulpbureau
     * @ORM\ManyToOne(targetEntity="Schuldhulpbureau")
     * @ORM\JoinColumn(name="schuldhulpbureau_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank
     */
    private $schuldhulpbureau;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="medewerker_schuldhulpbureau_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank
     */
    private $medewerkerSchuldhulpbureau;

    /**
     * @var Team
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=true)
     * @Assert\NotBlank(message="Vul hier het GKA team in waarnaar dit dossier verstuurd gaat worden")
     */
    private $teamGka;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $regasNummer;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $allegroNummer;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $allegroSyncDate;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sendToAllegro;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $allegroStatus;

    /**
     * @var string|null
     * @ORM\Column(type="text", nullable=true)
     */
    private $allegroExtraStatus;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="aanmaker_id", referencedColumnName="id", nullable=false)
     */
    private $aanmaker;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $aanmaakDatumTijd;

    /**
     * @var Voorlegger
     * @ORM\OneToOne(targetEntity="Voorlegger", mappedBy="dossier", orphanRemoval=true, cascade={"persist", "remove"})
     * @Assert\Valid
     */
    private $voorlegger;

    /**
     * @var DossierDocument[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="DossierDocument", mappedBy="dossier", cascade={"persist"})
     */
    private $documenten;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $inPrullenbak;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true, options={"default" : true})
     */
    private $eersteKeerVerzondenAanGKA;

    /**
     * @var SchuldItem[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="SchuldItem", mappedBy="dossier", cascade={"persist", "remove"})
     * @ORM\OrderBy({"id"="ASC"})
     */
    private $schuldItems;

    /**
     * @var Aantekening[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="Aantekening", mappedBy="dossier", cascade={"persist", "remove"})
     * @ORM\OrderBy({"datumTijd"="DESC", "id"="DESC"})
     */
    private $aantekeningen;

    /**
     * @var DossierTimeline[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="DossierTimeline", mappedBy="dossier", cascade={"persist", "remove"})
     * @ORM\OrderBy({"datumtijd"="DESC", "id"="DESC"})
     */
    private $timeline;

    /**
     * @var ActionEvent[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="ActionEvent", mappedBy="dossier", cascade={"remove"})
     * @ORM\OrderBy({"id"="DESC"})
     */
    private $actionEvents;

    public function __construct()
    {
        $this->aanmaakDatumTijd = new \DateTime();
        $this->documenten = new ArrayCollection();
        $this->schuldItems = new ArrayCollection();
        $this->inPrullenbak = false;
        $this->eersteKeerVerzondenAanGKA = false;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDossierTemplate()
    {
        return $this->dossierTemplate;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getClientNaam()
    {
        return $this->clientNaam;
    }

    public function getClientVoorletters()
    {
        return $this->clientVoorletters;
    }

    public function getClientGeslacht()
    {
        return $this->clientGeslacht;
    }

    /**
     * @return \DateTime|null
     */
    public function getClientGeboortedatum()
    {
        return $this->clientGeboortedatum;
    }

    public function getClientBSN()
    {
        return $this->clientBSN;
    }

    public function getClientBanknaam()
    {
        return $this->clientBanknaam;
    }

    public function getClientTelefoonnummer()
    {
        return $this->clientTelefoonnummer;
    }

    public function getClientStraat()
    {
        return $this->clientStraat;
    }

    public function getClientHuisnummer()
    {
        return $this->clientHuisnummer;
    }

    public function getClientPostcode()
    {
        return $this->clientPostcode;
    }

    public function getClientWoonplaats()
    {
        return $this->clientWoonplaats;
    }

    /**
     * @return array
     */
    public function getClientKinderen(): ?array
    {
        $kinderen = $this->clientKinderen;
        if (is_string($kinderen)) {
            $kinderen = json_decode($kinderen);
        }

        return $kinderen;
    }

    public function getClientBurgelijkeStaat()
    {
        return $this->clientBurgelijkeStaat;
    }

    public function getPartnerNvt()
    {
        return $this->partnerNvt;
    }

    public function getPartnerNaam()
    {
        return $this->partnerNaam;
    }

    public function getPartnerVoorletters()
    {
        return $this->partnerVoorletters;
    }

    public function getPartnerGeslacht()
    {
        return $this->partnerGeslacht;
    }

    public function getPartnerGeboortedatum()
    {
        return $this->partnerGeboortedatum;
    }

    public function getPartnerBSN()
    {
        return $this->partnerBSN;
    }

    public function getPartnerBanknaam()
    {
        return $this->partnerBanknaam;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau
     */
    public function getSchuldhulpbureau()
    {
        return $this->schuldhulpbureau;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker
     */
    public function getMedewerkerSchuldhulpbureau()
    {
        return $this->medewerkerSchuldhulpbureau;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team
     */
    public function getTeamGka()
    {
        return $this->teamGka;
    }

    public function getRegasNummer()
    {
        return $this->regasNummer;
    }

    public function getAllegroNummer()
    {
        return $this->allegroNummer;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker
     */
    public function getAanmaker()
    {
        return $this->aanmaker;
    }

    /**
     * @param string $geslacht
     *
     * @return string[]
     */
    public static function getGeslachtOpties()
    {
        return [
            'Man' => 'Man',
            'Vrouw' => 'Vrouw',
        ];
    }

    /**
     * @param string $burgelijkeStaat
     *
     * @return string[]
     */
    public static function getBurgelijkeStaatOpties()
    {
        return [
            'Gehuwd in gemeenschap van goederen' => 'Gehuwd in gemeenschap van goederen',
            'Gehuwd buiten iedere gemeenschap' => 'Gehuwd buiten iedere gemeenschap',
            'Samenwonend' => 'Samenwonend',
            'Ongehuwd' => 'Ongehuwd',
            'Gescheiden' => 'Gescheiden',
        ];
    }

    /**
     * @return \DateTime
     */
    public function getAanmaakDatumTijd()
    {
        return $this->aanmaakDatumTijd;
    }

    public function isInPrullenbak()
    {
        return $this->inPrullenbak;
    }

    public function isEersteKeerVerzondenAanGKA()
    {
        return $this->eersteKeerVerzondenAanGKA;
    }

    public function setDossierTemplate($dossierTemplate)
    {
        $this->dossierTemplate = $dossierTemplate;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setClientNaam($clientNaam)
    {
        $this->clientNaam = $clientNaam;
    }

    public function setClientVoorletters($clientVoorletters)
    {
        $this->clientVoorletters = $clientVoorletters;
    }

    public function setClientGeslacht($clientGeslacht = null)
    {
        $this->clientGeslacht = $clientGeslacht;
    }

    public function setClientGeboortedatum($clientGeboortedatum = null)
    {
        $this->clientGeboortedatum = $clientGeboortedatum;
    }

    public function setClientBSN($clientBSN = null)
    {
        $this->clientBSN = $clientBSN;
    }

    public function setClientBanknaam($clientBanknaam = null)
    {
        $this->clientBanknaam = $clientBanknaam;
    }

    public function setClientTelefoonnummer($clientTelefoonnummer = null)
    {
        $this->clientTelefoonnummer = $clientTelefoonnummer;
    }

    public function setClientStraat($clientStraat = null)
    {
        $this->clientStraat = $clientStraat;
    }

    public function setClientHuisnummer($clientHuisnummer = null)
    {
        $this->clientHuisnummer = $clientHuisnummer;
    }

    public function setClientPostcode($clientPostcode = null)
    {
        $this->clientPostcode = $clientPostcode;
    }

    public function setClientWoonplaats($clientWoonplaats = null)
    {
        $this->clientWoonplaats = $clientWoonplaats;
    }

    public function setClientBurgelijkeStaat($clientBurgelijkeStaat = null)
    {
        $this->clientBurgelijkeStaat = $clientBurgelijkeStaat;
    }

    /**
     * @param array $clientKinderen
     */
    public function setClientKinderen(array $clientKinderen = null): void
    {
        $this->clientKinderen = $clientKinderen;
    }

    public function setPartnerNvt($partnerNvt = null)
    {
        $this->partnerNvt = $partnerNvt;
    }

    public function setPartnerNaam($partnerNaam = null)
    {
        $this->partnerNaam = $partnerNaam;
    }

    public function setPartnerVoorletters($partnerVoorletters = null)
    {
        $this->partnerVoorletters = $partnerVoorletters;
    }

    public function setPartnerGeslacht($partnerGeslacht = null)
    {
        $this->partnerGeslacht = $partnerGeslacht;
    }

    public function setPartnerGeboortedatum($partnerGeboortedatum = null)
    {
        $this->partnerGeboortedatum = $partnerGeboortedatum;
    }

    public function setPartnerBSN($partnerBSN = null)
    {
        $this->partnerBSN = $partnerBSN;
    }

    public function setPartnerBanknaam($partnerBanknaam = null)
    {
        $this->partnerBanknaam = $partnerBanknaam;
    }

    /**
     * @param Schuldhulpbureau $schuldhulpbureau
     */
    public function setSchuldhulpbureau(Schuldhulpbureau $schuldhulpbureau = null)
    {
        $this->schuldhulpbureau = $schuldhulpbureau;
    }

    /**
     * @param Gebruiker $medewerkerSchuldhulpbureau
     */
    public function setMedewerkerSchuldhulpbureau(Gebruiker $medewerkerSchuldhulpbureau)
    {
        $this->medewerkerSchuldhulpbureau = $medewerkerSchuldhulpbureau;
    }

    /**
     * @param Team $teamGka
     */
    public function setTeamGka(Team $teamGka = null)
    {
        $this->teamGka = $teamGka;
    }

    public function setRegasNummer($regasNummer)
    {
        $this->regasNummer = $regasNummer;
    }

    public function setAllegroNummer($allegroNummer)
    {
        $this->allegroNummer = $allegroNummer;
    }

    public function setAanmaker($aanmaker)
    {
        $this->aanmaker = $aanmaker;
    }

    /**
     * @param \DateTime $aanmaakDatumTijd
     */
    public function setAanmaakDatumTijd(\DateTime $aanmaakDatumTijd)
    {
        $this->aanmaakDatumTijd = $aanmaakDatumTijd;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger
     */
    public function getVoorlegger()
    {
        return $this->voorlegger;
    }

    /**
     * @param Voorlegger $voorlegger
     */
    public function setVoorlegger(Voorlegger $voorlegger = null)
    {
        $oldVoorlegger = $this->voorlegger;
        $this->voorlegger = $voorlegger;
        if ($oldVoorlegger !== null) {
            $oldVoorlegger->setDossier(null);
        }
        if ($voorlegger !== null && $voorlegger->getDossier() !== $this) {
            $voorlegger->setDossier($this);
        }
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument[]|\Doctrine\Common\Collections\ArrayCollection
     */
    public function getDocumenten()
    {
        return $this->documenten;
    }

    /**
     * @param string $onderwerp
     *
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument[]|\Doctrine\Common\Collections\ArrayCollection
     */
    public function getDocumentenByOnderwerp($onderwerp)
    {
        return $this->documenten->filter(function (DossierDocument $dossierDocument) use ($onderwerp) {
            return $dossierDocument->getOnderwerp() === $onderwerp;
        });
    }

    /**
     * @param string $onderwerp
     *
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument[]|\Doctrine\Common\Collections\ArrayCollection
     */
    public function getNietVerwijderdeDocumentenByOnderwerp($onderwerp, $zonderSchulditem = false)
    {
        return $this->documenten->filter(function (DossierDocument $dossierDocument) use ($onderwerp, $zonderSchulditem) {
            if ($zonderSchulditem && null !== $dossierDocument->getSchuldItem()) {
                return false;
            }
            return $dossierDocument->getOnderwerp() === $onderwerp && $dossierDocument->getDocument()->isInPrullenbak() === false;
        });
    }

    /**
     * @param Array $onderwerpen
     *
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument[]|\Doctrine\Common\Collections\ArrayCollection
     */
    public function getNietVerwijderdeDocumentenByOnderwerpen($onderwerpen)
    {
        return $this->documenten->filter(function (DossierDocument $dossierDocument) use ($onderwerpen) {
            return in_array($dossierDocument->getOnderwerp(),
                    $onderwerpen) && $dossierDocument->getDocument()->isInPrullenbak() === false;
        });
    }

    /**
     * @param integer $id
     *
     * @return NULL|DossierDocument
     */
    public function getDossierDocumentByDocumentId($id)
    {
        $documenten = $this->documenten->filter(function (DossierDocument $dossierDocument) use ($id) {
            return $dossierDocument->getDocument()->getId() === $id;
        });

        return $documenten->count() === 1 ? $documenten->first() : null;
    }

    /**
     * @param integer $id
     *
     * @return NULL|DossierDocument
     */
    public function getDossierDocumentByDossierDocumentId($id)
    {
        $documenten = $this->documenten->filter(function (DossierDocument $dossierDocument) use ($id) {
            return $dossierDocument->getId() === $id;
        });

        return $documenten->count() === 1 ? $documenten->first() : null;
    }

    public function hasDocument(DossierDocument $document)
    {
        return $this->documenten->contains($document);
    }

    public function addDocument(DossierDocument $document)
    {
        if ($this->hasDocument($document) === false) {
            $this->documenten->add($document);
        }
        if ($document->getDossier() !== $this) {
            $document->setDossier($this);
        }
    }

    public function setInPrullenbak($inPrullenbak)
    {
        $this->inPrullenbak = $inPrullenbak;
    }

    public function setEersteKeerVerzondenAanGKA($eersteKeerVerzondenAanGKA)
    {
        $this->eersteKeerVerzondenAanGKA = $eersteKeerVerzondenAanGKA;
    }

    public function getSchuldItems()
    {
        return $this->schuldItems;
    }

    /**
     * @return SchuldItem[]
     */
    public function getSchuldItemsNotInPrullenbak()
    {
        return $this->schuldItems->filter(function (SchuldItem $schuldItem) {
            return $schuldItem->isVerwijderd() === false;
        });
    }

    public function getSumSchuldItemsNotInPrullenbak()
    {
        $items = $this->getSchuldItemsNotInPrullenbak();
        $sum = 0;
        foreach ($items as $item) {
            $sum += $item->getBedrag();
        }

        return $sum;
    }

    public function addSchuldItem(SchuldItem $schuldItem)
    {
        if ($this->hasSchuldItem($schuldItem) === false) {
            $this->schuldItems->add($schuldItem);
        }
        if ($schuldItem->getDossier() !== $this) {
            $schuldItem->setDossier($this);
        }
    }

    public function removeSchuldItem(SchuldItem $schuldItem)
    {
        if ($this->hasSchuldItem($schuldItem) === true) {
            $this->schuldItems->removeElement($schuldItem);
        }
        if ($schuldItem->getDossier() === $this) {
            $schuldItem->setDossier(null);
        }
    }

    public function hasSchuldItem(SchuldItem $schuldItem)
    {
        return $this->schuldItems->contains($schuldItem);
    }

    public function getTimeline()
    {
        return $this->timeline;
    }

    public function addTimeline(DossierTimeline $timeline)
    {
        if ($this->hasTimeline($timeline) === false) {
            $this->timeline->add($timeline);
        }
        if ($timeline->getDossier() !== $this) {
            $timeline->setDossier($this);
        }
    }

    public function removeTimeline(DossierTimeline $timeline)
    {
        if ($this->hasTimeline($timeline) === true) {
            $this->timeline->removeElement($timeline);
        }
        if ($timeline->getDossier() === $this) {
            $timeline->setDossier(null);
        }
    }

    public function hasTimeline(DossierTimeline $timeline)
    {
        return $this->timeline->contains($timeline);
    }

    public function getAantekeningen()
    {
        return $this->aantekeningen;
    }

    public function getAantekeningenByOnderwerp($onderwerp)
    {
        return $this->aantekeningen->filter(function (Aantekening $aantekening) use ($onderwerp) {
            return $aantekening->getOnderwerp() === $onderwerp;
        });
    }

    public function getAantekeningenBySchuldItem(SchuldItem $schuldItem)
    {
        return $this->aantekeningen->filter(function (Aantekening $aantekening) use ($schuldItem) {
            return $aantekening->getSchuldItem() === $schuldItem;
        });
    }

    public function hasAantekening(Aantekening $aantekening)
    {
        return $this->aantekeningen->contains($aantekening);
    }

    public function addAantekening(Aantekening $aantekening)
    {
        if ($this->hasAantekening($aantekening) === false) {
            $this->aantekeningen->add($aantekening);
        }
        if ($aantekening->getDossier() !== $this) {
            $aantekening->setDossier($this);
        }
    }

    public function removeAantekening(Aantekening $aantekening)
    {
        if ($this->hasAantekening($aantekening) === true) {
            $this->aantekeningen->removeElement($aantekening);
        }
        if ($aantekening->getDossier() === $this) {
            $aantekening->setDossier(null);
        }
    }

    public function getActionEvents()
    {
        return $this->actionEvents;
    }

    public function getAantekeningenAsSpreadsheetCsv(): Spreadsheet
    {
        $csvHeader = array_keys((new Aantekening())->getClassAttributes());
        $csvRows = [];
        if (!$this->getAantekeningen()->isEmpty()) {
            $csvRows = array_merge(...$this->getAantekeningen()->map(function (Aantekening $aantekening) {
                [$csvHeader, $row] = $aantekening->getClassAttributesAndValues();

                return $row;
            })->toArray());
        }

        return $this->batchToSpreadsheetCsv($csvHeader, $csvRows);
    }

    public function getLogsAsSpreadsheetCsv(): Spreadsheet
    {
        $csvHeader = array_keys((new ActionEvent())->getClassAttributes());
        $csvRows = [];
        if (!$this->getActionEvents()) {
            $csvRows = array_merge(...$this->getActionEvents()->map(function (ActionEvent $actionEvent) {
                [$csvHeader, $row] = $actionEvent->getClassAttributesAndValues();

                return $row;
            })->toArray());
        }

        return $this->batchToSpreadsheetCsv($csvHeader, $csvRows);
    }

    /**
     * Based on current status we can determine whether a dossier is with a MaDi organisation
     *
     * @return bool
     */
    public function withMadi(): bool
    {
        return in_array($this->getStatus(), [
            self::STATUS_BEZIG_MADI,
            self::STATUS_COMPLEET_MADI,
            self::STATUS_GECONTROLEERD_MADI,
        ], true);
    }

    /**
     * Based on current status we can determine whether a dossier is with the GKA
     *
     * @return bool
     */
    public function withGka(): bool
    {
        return in_array($this->getStatus(), [
            self::STATUS_VERZONDEN_MADI,
            self::STATUS_COMPLEET_GKA,
            self::STATUS_DOSSIER_GECONTROLEERD_GKA,
            self::STATUS_AFGESLOTEN_GKA,
        ], true);
    }

    /**
     * Checks whether the current dossier is closed based on status.
     *
     * @return bool
     */
    public function isAfgesloten(): bool
    {
        return $this->getStatus() === self::STATUS_AFGESLOTEN_GKA;
    }

    /**
     * @return \DateTime|null
     */
    public function getAllegroSyncDate(): ?\DateTime
    {
        return $this->allegroSyncDate;
    }

    /**
     * @param \DateTime|null $allegroSyncDate
     * @return Dossier
     */
    public function setAllegroSyncDate(?\DateTime $allegroSyncDate): Dossier
    {
        $this->allegroSyncDate = $allegroSyncDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAllegroStatus(): ?string
    {
        return $this->allegroStatus;
    }

    /**
     * @param string|null $allegroStatus
     * @return Dossier
     */
    public function setAllegroStatus(?string $allegroStatus): Dossier
    {
        $this->allegroStatus = $allegroStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAllegroExtraStatus(): ?string
    {
        return $this->allegroExtraStatus;
    }

    /**
     * @param string|null $allegroExtraStatus
     * @return Dossier
     */
    public function setAllegroExtraStatus(?string $allegroExtraStatus): Dossier
    {
        $this->allegroExtraStatus = $allegroExtraStatus;

        return $this;
    }

    public static function twigAllegroStatus(string $status): string
    {
        return isset(self::ALLEGRO_STATUS[$status]) ? self::ALLEGRO_STATUS[$status] : 'Onbekend';
    }

    /**
     * @return \DateTime|null
     */
    public function getClientHuwelijksdatum(): ?\DateTime
    {
        return $this->clientHuwelijksdatum;
    }

    /**
     * @param \DateTime|null $clientHuwelijksdatum
     * @return Dossier
     */
    public function setClientHuwelijksdatum(?\DateTime $clientHuwelijksdatum): Dossier
    {
        $this->clientHuwelijksdatum = $clientHuwelijksdatum;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getSendToAllegro(): ?\DateTime
    {
        return $this->sendToAllegro;
    }

    /**
     * @param \DateTime|null $sendToAllegro
     * @return Dossier
     */
    public function setSendToAllegro(?\DateTime $sendToAllegro): Dossier
    {
        $this->sendToAllegro = $sendToAllegro;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getClientBurgelijkeStaatSinds(): ?\DateTime
    {
        return $this->clientBurgelijkeStaatSinds;
    }

    /**
     * @param \DateTime|null $clientBurgelijkeStaatSinds
     * @return Dossier
     */
    public function setClientBurgelijkeStaatSinds(?\DateTime $clientBurgelijkeStaatSinds): Dossier
    {
        $this->clientBurgelijkeStaatSinds = $clientBurgelijkeStaatSinds;

        return $this;
    }
}
