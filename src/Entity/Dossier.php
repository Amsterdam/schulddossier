<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="GemeenteAmsterdam\FixxxSchuldhulp\Repository\DossierRepository")
 * @ORM\Table
 * @UniqueEntity("regasNummer")
 * @UniqueEntity("allegroNummer")
 */
class Dossier
{
    public const STATUS_BEZIG_MADI = 'bezig_madi';
    public const STATUS_COMPLEET_MADI = 'compleet_madi';
    public const STATUS_GECONTROLEERD_MADI = 'gecontroleerd_madi';
    public const STATUS_VERZONDEN_MADI = 'verzonden_madi';
    public const STATUS_COMPLEET_GKA = 'compleet_gka';
    public const STATUS_DOSSIER_GECONTROLEERD_GKA = 'dossier_gecontroleerd_gka';
    public const STATUS_AFGESLOTEN_GKA = 'afgesloten_gka';

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
    private $partnerNaam;

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
     * @var SchuldItem[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="SchuldItem", mappedBy="dossier", cascade={"persist"})
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
     * @ORM\OneToMany(targetEntity="DossierTimeline", mappedBy="dossier", cascade={"persist"})
     * @ORM\OrderBy({"datumtijd"="DESC", "id"="DESC"})
     */
    private $timeline;

    public function __construct()
    {
        $this->aanmaakDatumTijd = new \DateTime();
        $this->documenten = new ArrayCollection();
        $this->schuldItems = new ArrayCollection();
        $this->inPrullenbak = false;
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

    public function getPartnerNaam()
    {
        return $this->partnerNaam;
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

    public function setPartnerNaam($partnerNaam)
    {
        $this->partnerNaam = $partnerNaam;
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
    public function getNietVerwijderdeDocumentenByOnderwerp($onderwerp)
    {
        return $this->documenten->filter(function (DossierDocument $dossierDocument) use ($onderwerp) {
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
            return in_array($dossierDocument->getOnderwerp(), $onderwerpen) && $dossierDocument->getDocument()->isInPrullenbak() === false;
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

    public function getSchuldItems()
    {
        return $this->schuldItems;
    }

    public function getSchuldItemsNotInPrullenbak()
    {
        return $this->schuldItems->filter(function (SchuldItem $schuldItem) {
            return $schuldItem->isVerwijderd() === false;
        });
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
}
