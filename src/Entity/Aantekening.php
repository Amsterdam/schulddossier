<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use GemeenteAmsterdam\FixxxSchuldhulp\Traits\ExportAble;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Aantekening
{
    use ExportAble;
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="bigint", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Dossier
     * @ORM\ManyToOne(targetEntity="Dossier", inversedBy="aantekeningen")
     * @ORM\JoinColumn(name="dossier_id", referencedColumnName="id", nullable=false)
     */
    private $dossier;

    /**
     * @var string
     * @ORM\Column(length=255, nullable=false)
     */
    private $onderwerp;

    /**
     * @var SchuldItem
     * @ORM\ManyToOne(targetEntity="SchuldItem", inversedBy="aantekeningen")
     * @ORM\JoinColumn(name="schuld_item_id", referencedColumnName="id", nullable=true)
     */
    private $schuldItem;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $datumTijd;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="gebruiker_id", referencedColumnName="id", nullable=false)
     */
    private $gebruiker;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     * @Assert\Length(min=1, max=20480)
     * @Assert\NotBlank
     */
    private $tekst;

    public function __construct()
    {
        $this->datumTijd = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDossier()
    {
        return $this->dossier;
    }

    public function getOnderwerp()
    {
        return $this->onderwerp;
    }

    public function getSchuldItem()
    {
        return $this->schuldItem;
    }

    public function getDatumTijd()
    {
        return $this->datumTijd;
    }

    public function getGebruiker()
    {
        return $this->gebruiker;
    }

    public function getTekst()
    {
        return $this->tekst;
    }

    public function setDossier(Dossier $dossier)
    {
        $this->dossier = $dossier;
        if ($dossier->hasAantekening($this) === false) {
            $dossier->addAantekening($this);
        }
    }

    public function setSchuldItem(SchuldItem $schuldItem)
    {
        $this->schuldItem = $schuldItem;
        if ($this->schuldItem->hasAantekening($this) === false) {
            $schuldItem->addAantekening($this);
        }
    }

    public function setOnderwerp($onderwerp)
    {
        $this->onderwerp = $onderwerp;
    }

    public function setGebruiker(Gebruiker $gebruiker)
    {
        $this->gebruiker = $gebruiker;
    }

    public function setTekst($tekst)
    {
        $this->tekst = $tekst;
    }
}
